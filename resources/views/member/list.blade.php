

<div class="container">
    @include('components/app/navbar', ['title' => $title])
</div>


    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="container-fluid py-4 px-5">

            <div class="row">
                <div class="col-12">
                    <div class="card border shadow-xs mb-4">
                        <div class="card-header border-bottom pb-0">
                            <div class="d-sm-flex align-items-center">
                                <div>
                                    <h6 class="font-weight-semibold text-lg mb-0">បញ្ជីរាយនាមសមាជិកគណបក្សប្រជាជនកម្ពុជា</h6>
                                    {{-- <p class="text-sm">See information about all members</p> --}}
                                </div>
                                <div class="ms-auto d-flex">

                                    <a type="button" class="btn btn-sm btn-dark btn-icon d-flex align-items-center me-2" href="{{ route('members.create') }}">
                                        <span class="btn-inner--icon">
                                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="d-block me-2">
                                                <path d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z"/>
                                            </svg>
                                        </span>
                                        <span class="btn-inner--text">បន្ថែម</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body px-0 py-0">
                            <div class="border-bottom py-3 px-3 d-sm-flex align-items-center">

                                <div class="input-group w-sm-25 ms-auto">
                                    <span class="input-group-text text-body">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16px" height="16px"
                                            fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z">
                                            </path>
                                        </svg>
                                    </span>
                                    <input type="text" class="form-control" placeholder="ស្វែងរក" id="search">
                                </div>
                            </div>
                            <div class="table-responsive p-0">
                                <table class="table align-items-center mb-0">
                                    <thead class="bg-gray-100">
                                        <tr>
                                            <th data-column="code" data-direction="asc" class="text-secondary text-xs font-weight-semibold opacity-7" style="text-align: left; font-size: 1rem!important; color: black !important; font-weight: bold; width: 5% ">
                                                ល.រ
                                            </th>
                                            <th data-column="khmer_name" data-direction="asc" class="text-secondary text-xs font-weight-semibold opacity-7 ps-2" style="text-align: center; font-size: 1rem!important; color: black !important; font-weight: bold; ">
                                                រូបថត
                                            </th>
                                            <th data-column="khmer_name" data-direction="asc" class="text-secondary text-xs font-weight-semibold opacity-7 ps-2" style="text-align: center; font-size: 1rem!important; color: black !important; font-weight: bold; ">
                                                ព័ត៍មានសមាជិក
                                            </th>
                                            <th data-column="name" data-direction="asc" class="text-secondary text-xs font-weight-semibold opacity-7 ps-2" style="text-align: center; font-size: 1rem!important; color: black !important; font-weight: bold; ">
                                                ព័ត៍មានគណបក្ស
                                            </th>
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7" style="text-align: center; font-size: 1rem!important; color: black !important; font-weight: bold; ">
                                                អត្ត.សបណ្ណ
                                            </th>
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7" style="text-align: center; font-size: 1rem!important; color: black !important; font-weight: bold; ">
                                                ព័ត៍មានបោះឆ្នោត
                                            </th>
                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7" style="text-align: center; font-size: 1rem!important; color: black !important; font-weight: bold; ">
                                                ផ្សេងៗ
                                            </th>
                                        </tr>
                                    </thead>

                                    <tbody id ="dataBody">






                                    </tbody>
                                </table>
                                <div id="pagination" class="d-flex justify-content-end m-3"></div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <x-app.footer />
        </div>
    </main>









<script>
    let currentPage = 1;
    let sortColumn = 'code'; // default column to sort
    let sortDirection = 'asc'; // default direction

    function getData(searchValue = '', page = 1) {
    currentPage = page;
    const url = "{{ route('getMembers') }}";

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        url: url,
        type: 'POST',
        data: {
            search: searchValue,
            page: page,
            sort_column: sortColumn,
            sort_direction: sortDirection
        },
        success: function(response) {
            const data = response.data;
            let html = '';
            console.log(response);
            data.forEach(m => {
                let gender ='';
                let birthday = m.birthday;
                let age      = calculateAge(birthday);
                let role = '';
                let id_number_docs = '';

                if(m.gender == 1){
                    gender ='ប្រុស';
                }else{
                    gender ='ស្រី';
                }
                if(m.member_role == 1){
                    role = "សមាជិក";
                }else if(m.member_role == 2){
                    role = "អនុប្រធានក្រុម";
                }else{
                    role = "ប្រធានក្រុម"
                }

                if(m.id_number_docs == 1){
                    id_number_docs = "អ.ខ៣";
                }else if(m.id_number_docs == 2){
                    id_number_docs = "ឯ.អ";
                }

                html += `
                    <tr style="cursor: pointer" >
                        <td>
                            <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center ms-1">
                                    <h6 class="mb-0 text-sm font-weight-semibold">${m.id}</h6>
                                </div>
                            </div>
                        </td>
                         <td>
                            <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center ms-1">
                                </div>
                            </div>
                        </td>
                        <td style ="width: 15%">
                            <div style ="display: flex; justify-content: space-between">
                                <div>
                                    <p>${m.name}</p>
                                    <p>${m.birthday}</p>
                                </div>
                                 <div>
                                    <p>ភេទ: ${gender}</p>
                                    <p>អាយុ: ${age}</p>
                                </div>
                            </div>
                        </td>
                        <td style ="width: 20%" style ="text-align: center !important; ">
                                    <p  style ="text-align: center !important; ">ថ្ងៃចូល ${m.date_in ? m.date_in : ''}</p>
                                    <p  style ="text-align: center !important; ">តួនាទី ${role ? role : ''}</p>
                        </td>
                        <td class="align-middle text-center text-sm" style ="width: 20%">
                            <p>${id_number_docs}</p>
                            <p>${m.number_docs_number ? m.number_docs_number :m.id_number}</p>
                        </td>
                        <td style="text-align: center" style ="width: 20%">
                           <p>ការិ. ${m.office_election ? m.office_election : ''}</p>
                        </td>
                           <td style="text-align: center" style ="width: 20%">
                           <p>${m.other ? m.other : ''}</p>

                        </td>
                    </tr>
                `;
            });

            console.log(response)
            // Pagination
            let paginationHtml = '';
            if (response.prev_page_url) {
                paginationHtml += `<a href="javascript:void(0);" class="pagination-link" data-page="${response.current_page - 1}"><p style ="margin: 0 1rem">ក្រោយ</p></a>`;
            }
            for (let i = 1; i <= response.last_page; i++) {
                paginationHtml += `<a href="javascript:void(0);" class="pagination-link ${i === response.current_page ? 'active' : ''}" data-page="${i}"><p style ="margin: 0 .1rem">${i}</p></a>`;
            }
            if (response.next_page_url) {
                paginationHtml += `<a href="javascript:void(0);" class="pagination-link" data-page="${response.current_page + 1}"><p style ="margin: 0 1rem">បន្ទាប់</p></a>`;
            }
            $('#pagination').html(paginationHtml);
            $("#dataBody").html(html);

        },
        error: function(xhr, status, error) {
            console.error('AJAX request failed:', error);
        }
    });
}
function calculateAge(birthDateString) {
    const birthDate = new Date(birthDateString);

    const currentDate = new Date();

    let age = currentDate.getFullYear() - birthDate.getFullYear();
    const monthDifference = currentDate.getMonth() - birthDate.getMonth();

    if (monthDifference < 0 || (monthDifference === 0 && currentDate.getDate() < birthDate.getDate())) {
        age--;
    }

    return age;
}

    $(document).ready(function() {
        getData();
    });

    $('#search').on('input', function() {
        getData($(this).val(), 1); // Reset to page 1 on search
    });

    $(document).on('click', '.pagination-link', function() {
        const page = $(this).data('page');
        getData($('#search').val(), page);
    });

    $(document).on('click', 'th', function() {
        const column = $(this).data('column');
        sortDirection = $(this).data('direction') === 'asc' ? 'desc' : 'asc';
        sortColumn = column;
        $('th').not(this).data('direction', 'asc'); // Reset other headers
        $(this).data('direction', sortDirection); // Toggle current header direction
        getData($('#search').val(), currentPage);
    });
    $(document).on('click', 'th', function() {
    const column = $(this).data('column');
    sortDirection = $(this).data('direction') === 'asc' ? 'desc' : 'asc';
    sortColumn = column;

    // Update the sorting arrows
    $('th').removeClass('sort-asc sort-desc');
    $(this).addClass(sortDirection === 'asc' ? 'sort-asc' : 'sort-desc');

    // Reset other headers
    $('th').not(this).data('direction', 'asc'); // Reset other headers

    getData($('#search').val(), currentPage);
});

</script>
<style>
    th.sort-asc::after {
    content: ' \25B2';
}
th{
    cursor: pointer;
}
th.sort-desc::after {
    content: ' \25BC';
}

</style>

