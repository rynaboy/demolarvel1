

<div class="container">
    @include('components/app/navbar', ['title' => $title])
</div>
    <main class="main-content" style="zoom:70%;margin-left:15%;max-width:1240px;max-height:1754px"  id="report">
        <div class="container-fluid py-4 px-5">
         <div class="report-bar" style="display: flex ;justify-content: center; align-items: center;justify-content:space-between">
            <div class="report-bar-left" >
                <h6>គណះបក្សប្រជាជនកម្ពុជា</h6>
                <h6>គណះកម្មាធិការគណបក្សឃុំបូវិល</h6>
                <h6>សាខាគណបក្សភូមិបូវិល <span>២</span></h6> 
                <h6>ការិយាល័យលេខ​​ <span>0987</span></h6> 
            </div>
            <div class="report-bar-img">
            <nav >
                  <img style="width:105px;height:120px" src="data:image/jpeg;base64,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
                 x4wRteGoNaHax7jrCHMytUlViVXMrC2gdWpKMAdSdORYbxIf4sqXWUFlIV4+WUVW5Ft1NVPLKfC/TKOrL3JShKEs+pKkqUtsL133N1E28AYHbpCbnG5td7CDI4VLIB+mvc+XaK8wzLva1KaaDgRoDrKA0sZsFFabE9s3HiNZ45ONkYjiGxjHOFSzgsnCdwaHtEaZrE2WmQ5LTT6x6FuNAqWLjc2sABe+2/iHGuJsTLmEy9Vd7fP3AFSrzCTy5ghI3HveHzhihN0KQDJdL8yvLzyvzHx2A6CKiUISSUpArtE519x2gWomm8GI+4DEjo6KFWpMtVGwHgUuo/wBbqMKT/I8QvMSrcwmixDEvNOS5+nI5jQwqzvD1SYcUW2BMJJ+5pYBPTIUcf9iA7wh9B+i4iy1PsLAxGnf29o8ynD1SfcuuWEuLmy3Vj09sJOce0Y3wmYWaKsI1yfYQLKr2H9hqpFHl6Wg6CXH1fe6vc+B2HgRelpRuWTRAvvEeZm1zBvYDSCMNQrEjo6P/2Q==" alt="">
            </nav>

            </div>
            <div class="report-bar-right" >
                <h6 style="font-weight: 400;margin-top:-35px;">ឯករាជ្យ សន្តិភាព​ សេរីភាព ប្រជាធិបតេយ្យ</h6>
                <h6 style="margin-left: 33px;font-weight: 400">អធ្យាក្រឹត ​និងវឌ្ឍនភាពសង្គម</h6>
            </div>
         </div>
         <div class="row">
                <div class="col-12">
                    <div>
                        <h6 class=" text-lg mb-0 " style="text-align:center;font-weight:bold;margin-left:-27px">បញ្ជីរាយនាមប្រជាពលរដ្ធពុំទាន់ចូលជាសមាជិកគណបក្សប្រជាជនកម្ពុជា</h6>
                    </div>
                    <table class="table table-striped table-bordered" style="width:100%" >
                        <thead >
                            <tr>
                                <th data-column="code" data-direction="asc" class="text-secondary text-xs font-weight-semibold opacity-7" style="text-align: left; font-size: 1rem!important; color: black !important; font-weight: bold;">
                                    ល.រ
                                </th>
                                <th data-column="khmer_name" data-direction="asc" class="text-secondary text-xs font-weight-semibold opacity-7 ps-2" style="text-align: center; font-size: 1rem!important; color: black !important; font-weight: bold; ">
                                    គោត្តនាម-នាម
                                </th>
                                <th data-column="khmer_name" data-direction="asc" class="text-secondary text-xs font-weight-semibold opacity-7 ps-2" style="text-align: center; font-size: 1rem!important; color: black !important; font-weight: bold; ">
                                    ភេទ
                                </th>
                                <th data-column="name" data-direction="asc" class="text-secondary text-xs font-weight-semibold opacity-7 ps-2" style="text-align: center; font-size: 1rem!important; color: black !important; font-weight: bold; ">
                                    ឆ្នាំកំណើត
                                </th>
                                <th class="text-center text-secondary text-xs font-weight-semibold opacity-7" style="text-align: center; font-size: 1rem!important; color: black !important; font-weight: bold; ">
                                    ទីកន្លែងកំណើត
                                </th>
                                <th class="text-center text-secondary text-xs font-weight-semibold opacity-7" style="text-align: center; font-size: 1rem!important; color: black !important; font-weight: bold; ">
                                    អត្ត.សប
                                </th>
                                <th class="text-center text-secondary text-xs font-weight-semibold opacity-7" style="text-align: center; font-size: 1rem!important; color: black !important; font-weight: bold; ">
                                    ថ្ងៃចូលបក្ស
                                </th>
                                <th class="text-center text-secondary text-xs font-weight-semibold opacity-7" style="text-align: center; font-size: 1rem!important; color: black !important; font-weight: bold; ">
                                    ក្រុម
                                </th>
                                <th class="text-center text-secondary text-xs font-weight-semibold opacity-7" style="text-align: center; font-size: 1rem!important; color: black !important; font-weight: bold; ">
                                    តួនាទីបក្ស
                                </th>
                                <th class="text-center text-secondary text-xs font-weight-semibold opacity-7" style="text-align: center; font-size: 1rem!important; color: black !important; font-weight: bold; ">
                                    ការិ.
                                </th>
                                <th class="text-center text-secondary text-xs font-weight-semibold opacity-7" style="text-align: center; font-size: 1rem!important; color: black !important; font-weight: bold; ">
                                   លរ
                                </th>
                                <th class="text-center text-secondary text-xs font-weight-semibold opacity-7" style="text-align: center; font-size: 1rem!important; color: black !important; font-weight: bold; ">
                                    ទូរស័ព្ទ
                                </th>
                            </tr>
                        </thead>
                        <tbody style="text-align:center">
                            <tr>
                                <td>1</td>
                                <td>ស៊ីម ស៊ីណាល់</td>
                                <td>ប</td>
                                <td>13/09/24</td>
                                <td>បាត់ដំបង </td>
                                <td >00345456</td>
                                <td >13/09/24</td>
                                <td>5</td>
                                <td>ប្រធាន</td>
                                <td>08454</td>
                                <td>4</td>
                                <td>មិនស្គាល់</td>
                              </tr>

                              <tr>
                                <td>2</td>
                                <td>ស៊ីម ស៊ីណាល់</td>
                                <td>ប</td>
                                <td>13/09/24</td>
                                <td>បាត់ដំបង </td>
                                <td >00345456</td>
                                <td >13/09/24</td>
                                <td>5</td>
                                <td>ប្រធាន</td>
                                <td>08454</td>
                                <td>4</td>
                                <td>មិនស្គាល់</td>
                              </tr>

                              <tr>
                                <td>3</td>
                                <td>ស៊ីម ស៊ីណាល់</td>
                                <td>ប</td>
                                <td>13/09/24</td>
                                <td>បាត់ដំបង </td>
                                <td >00345456</td>
                                <td >13/09/24</td>
                                <td>5</td>
                                <td>ប្រធាន</td>
                                <td>08454</td>
                                <td>4</td>
                                <td>មិនស្គាល់</td>
                              </tr>

                              <tr>
                                <td>4</td>
                                <td>ស៊ីម ស៊ីណាល់</td>
                                <td>ប</td>
                                <td>13/09/24</td>
                                <td>បាត់ដំបង </td>
                                <td >00345456</td>
                                <td >13/09/24</td>
                                <td>5</td>
                                <td>ប្រធាន</td>
                                <td>08454</td>
                                <td>4</td>
                                <td>មិនស្គាល់</td>
                              </tr>

                              <tr>
                                <td>5</td>
                                <td>ស៊ីម ស៊ីណាល់</td>
                                <td>ប</td>
                                <td>13/09/24</td>
                                <td>បាត់ដំបង </td>
                                <td >00345456</td>
                                <td >13/09/24</td>
                                <td>5</td>
                                <td>ប្រធាន</td>
                                <td>08454</td>
                                <td>4</td>
                                <td>មិនស្គាល់</td>
                              </tr>
                            
                        </tbody>
                      </table>
                </div>
            </div>
            {{-- <x-app.footer /> --}}
            <div class="row">
                <div class="col-12" >
                    <div class="footer1" style="display: flex;justify-content:center;margin-left:-50%;gap:35px">
                        <div>
                         ប្រ.ដ្ធសរុប​  &nbsp;&nbsp;<span>66</span>
                        </div>
                        <div>
                            នាក់ស្រី <span>34</span> 
                        </div>
                        <div>
                            នាក់,មានអខ៣ <span>35</span> 
                        </div>
                        <div >
                            នាក់,គ្មានអខ៣  <span>31</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="footer2" style="display: flex;justify-content:center;">
                    <div style="font-weight:bold;margin-left:-10px">
                        ចំណាកក្នុងស្រុក <span>៣១</span>
                    </div>
                    <div style="margin-left: 55%;display:flex;gap:40px">
                    <div >
                        ថ្ងៃ
                     </div>
                      <div>
                         ខែ
                     </div>
                     <div>
                         ឆ្នាំថោះបញ្ចាស័ក ព.ស.២៥៦៧
                     </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="footer2" style="display: flex;justify-content:center;">
                    <div style="font-weight:bold;margin-left:-56px">
                        ចំណាកក្រៅស្រុក <span>៣១</span>
                    </div>
                    <div style="margin-left: 60%;display:flex;gap:40px">
                    <div >
                        ថ្ងៃទី
                     </div>
                      <div>
                         ខែ
                     </div>
                     <div>
                        ឆ្នាំ២០២៤
                     </div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="footer4" style="display: flex;justify-content:center;justify-content:space-between;">
                       <div class="footer4-left" style="margin-left:48px;font-weight:bold;">
                         ស្លាប់ <span>២</span>
                       </div>
                       <div class="footer4-right" style="font-weight:900;margin-right:80px !important;">
                        ប្រធានសាខាគណបក្សភូមិបវេល​ <span>២</span>
                      </div>
                   </div>
                </div>
            </div>
        </div>
    </main>
    <button class="print-button" onclick="print()">Print</button>


    {{-- style button print --}}
  <style>
        button {
        padding: 10px;
        background-color: #9d9e9d;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-left: 210px;
        margin-top:-5px !important;
    }
    button:hover {
        background-color: #121712;
    }
    </style>
</style>
{{-- start script func print --}}
<script>
function print() {
    const printWindow = window.open('', '', 'height=600,width=800');
    printWindow.document.open();
    printWindow.document.write('<html><link rel="stylesheet" href="{{ asset('assets/css/corporate-ui-dashboard.css') }}"><link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> <head>');
    printWindow.document.write('<style>body{zoom:80%;font-family:Battambang;margin-left:-47px;};</style>');
    printWindow.document.write('</head><body >');
    printWindow.document.write(document.getElementById('report').innerHTML);
    printWindow.document.write('</body></html>');
    printWindow.document.close();
    printWindow.focus();
    printWindow.print();
}
</script>
{{-- end script func print --}}



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

