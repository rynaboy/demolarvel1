

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
                                    <h6 class="font-weight-semibold text-lg mb-0">បញ្ជីភូមិនៃ ឃុំ/សង្កាត់ </h6>
                                </div>
                                <div class="ms-auto d-flex">

                                    <button type="button" class="btn btn-sm btn-dark btn-icon d-flex align-items-center me-2" data-bs-toggle="modal" data-bs-target="#create_commune">
                                        <span class="btn-inner--icon">
                                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="d-block me-2">
                                                <path d="M6.25 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM3.25 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.684-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM19.75 7.5a.75.75 0 00-1.5 0v2.25H16a.75.75 0 000 1.5h2.25v2.25a.75.75 0 001.5 0v-2.25H22a.75.75 0 000-1.5h-2.25V7.5z"/>
                                            </svg>
                                        </span>
                                        <span class="btn-inner--text">បន្ថែម</span>
                                    </button>
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
                                            <th data-column="code" data-direction="asc" class="text-secondary text-xs font-weight-semibold opacity-7">
                                                លេខកូដ
                                            </th>
                                            <th data-column="khmer_name" data-direction="asc" class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">
                                                ឈ្មោះជាភាសាខ្មែរ
                                            </th>
                                            <th data-column="name" data-direction="asc" class="text-secondary text-xs font-weight-semibold opacity-7 ps-2">
                                                ឈ្មោះ
                                            </th>

                                            <th class="text-center text-secondary text-xs font-weight-semibold opacity-7">
                                                សកម្មភាព
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
        function navigateToVillage(code) {
            window.location.href = `{{ route('village', ':code') }}`.replace(':code', code);
        }
    </script>

{{-- Modal --}}
<div class="modal fade" id="create_commune" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <form action="{{ route('village_store') }}" method="POST">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">បង្កើតភូមិថ្មី</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="code" class="form-label">លេខកូដ</label>
                        <input type="text" class="form-control" id="code" name="code" required>
                    </div>
                    <div class="mb-3">
                        <label for="khmer_name" class="form-label">ឈ្មោះជាភាសាខ្មែរ</label>
                        <input type="text" class="form-control" id="khmer_name" name="khmer_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="english_name" class="form-label">ឈ្មោះជាភាសាអង់គ្លេស</label>
                        <input type="text" class="form-control" id="english_name" name="name" required>
                    </div>
                    <input type="text" class="form-control"  name="commune_id" required value="<?=$commune_id ?>" hidden>


                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">បោះបង់</button>
                    <button type="submit" class="btn btn-primary">បញ្ជូលទិន្នន័យ</button>
                </div>
            </div>
        </div>
    </form>
</div>





<script>
    let currentPage = 1;
    let sortColumn = 'code'; // default column to sort
    let sortDirection = 'asc'; // default direction
    let commune_id    = <?= $commune_id ?>;
    function getData(searchValue = '', page = 1) {
    currentPage = page;
    const url = "{{ route('getVillage') }}";

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
            sort_direction: sortDirection,
            commune_id   : commune_id
        },
        success: function(response) {
            const data = response.data;
            let html = '';

            data.forEach(com => {
                html += `
                    <tr style="cursor: pointer" onclick="navigateToVillage(${com.code})">
                        <td>
                            <div class="d-flex px-2 py-1">
                                <div class="d-flex flex-column justify-content-center ms-1">
                                    <h6 class="mb-0 text-sm font-weight-semibold">${com.code}</h6>
                                </div>
                            </div>
                        </td>
                        <td>
                            <p class="text-sm text-dark font-weight-semibold mb-0">${com.khmer_name}</p>
                        </td>
                        <td>
                            <p class="text-sm text-dark font-weight-semibold mb-0">${com.name}</p>
                        </td>

                        <td style="text-align: center">
                            <a href="javascript:;" class="text-secondary font-weight-bold text-xs"
                               data-bs-toggle="tooltip" data-bs-title="Edit user">
                                <svg width="14" height="14" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11.2201 2.02495C10.8292 1.63482 10.196 1.63545 9.80585 2.02636C9.41572 2.41727 9.41635 3.05044 9.80726 3.44057L11.2201 2.02495ZM12.5572 6.18502C12.9481 6.57516 13.5813 6.57453 13.9714 6.18362C14.3615 5.79271 14.3609 5.15954 13.97 4.7694L12.5572 6.18502ZM11.6803 1.56839L12.3867 2.2762L12.3867 2.27619L11.6803 1.56839ZM14.4302 4.31284L15.1367 5.02065L15.1367 5.02064L14.4302 4.31284ZM3.72198 15V16C3.98686 16 4.24091 15.8949 4.42839 15.7078L3.72198 15ZM0.999756 15H-0.000244141C-0.000244141 15.5523 0.447471 16 0.999756 16L0.999756 15ZM0.999756 12.2279L0.293346 11.5201C0.105383 11.7077 -0.000244141 11.9624 -0.000244141 12.2279H0.999756ZM9.80726 3.44057L12.5572 6.18502L13.97 4.7694L11.2201 2.02495L9.80726 3.44057ZM12.3867 2.27619C12.7557 1.90794 13.3549 1.90794 13.7238 2.27619L15.1367 0.860593C13.9869 -0.286864 12.1236 -0.286864 10.9739 0.860593L12.3867 2.27619ZM13.7238 2.27619C14.0917 2.64337 14.0917 3.23787 13.7238 3.60504L15.1367 5.02064C16.2875 3.8721 16.2875 2.00913 15.1367 0.860593L13.7238 2.27619ZM13.7238 3.60504L3.01557 14.2922L4.42839 15.7078L15.1367 5.02065L13.7238 3.60504ZM3.72198 14H0.999756V16H3.72198V14ZM1.99976 15V12.2279H-0.000244141V15H1.99976ZM1.70617 12.9357L12.3867 2.2762L10.9739 0.86059L0.293346 11.5201L1.70617 12.9357Z" fill="#64748B"/>
                                </svg>
                            </a>
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

