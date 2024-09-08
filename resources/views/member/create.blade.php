<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <div class="container">
        @include('components/app/navbar', ['title' => $title])
    </div>

    <div class="container mt-4">
        <form action="{{ route('create_new_member') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-3">
                    <p>ព័ត៍មានបថម</p>
                    <div class="mb-3">
                        <label for="member_id_number" class="form-label">លេខអត្តសញ្ញាណបណ្ណ</label>
                        <input type="text" class="form-control" id="member_id_number" name="member_id_number">
                    </div>
                    <div class="mb-3">
                        <label for="member_name" class="form-label">នាមត្រកូល និងនាមខ្លួន</label>
                        <input type="text" class="form-control" id="member_name" name="member_name">
                    </div>
                    <div class="mb-3">
                        <label for="member_gender" class="form-label">ភេទ</label>
                        <select class="form-select" id="member_gender" name="member_gender">
                            <option value="1">ប្រុស</option>
                            <option value="2">ស្រី</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="member_birthday" class="form-label">ឆ្នាំកំណើត</label>
                        <input type="date" class="form-control" id="member_birthday" name="member_birthday">
                    </div>
                    <div class="mb-3">
                        <label for="member_place_birth" class="form-label">ទីកន្លែងកំណើត</label>
                        <textarea class="form-control" id="member_place_birth" name="member_place_birth"></textarea>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-3">
                    <p>ព័ត៍មានគណបក្ស</p>
                    <div class="mb-3">
                        <label for="member_role" class="form-label">តួនាទីបក្ស</label>
                        <select class="form-select" id="member_role" name="member_role">
                            <option value="1">សមាជិក</option>
                            <option value="2">អនុប្រធាន</option>
                            <option value="3">ប្រធាន</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="member_date_in" class="form-label">ថ្ងៃចូលបក្ស</label>
                        <input type="date" class="form-control" id="member_date_in" name="member_date_in">
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-3">
                    <p>ព័ត៍មានបោះឆ្នោត</p>
                    <div class="mb-3">
                        <label for="member_province_election" class="form-label">រាជធានី ខេត្ត</label>
                        <input type="text" class="form-control" id="member_province_election" name="member_province_election">
                    </div>
                    <div class="mb-3">
                        <label for="member_commune_election" class="form-label">ឃុំ សង្កាត់</label>
                        <input type="text" class="form-control" id="member_commune_election" name="member_commune_election">
                    </div>
                    <div class="mb-3">
                        <label for="member_office_election" class="form-label">ការិយាល័យបោះឆ្នោត</label>
                        <input type="text" class="form-control" id="member_office_election" name="member_office_election">
                    </div>
                    <div class="mb-3">
                        <label for="member_id_number_docs" class="form-label">ប្រភេទឯកសារ</label>
                        <select class="form-select" id="member_id_number_docs" name="member_id_number_docs">
                            <option value="1">អ.ខ៣</option>
                            <option value="2">ឯ.អ</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="member_id_number_docs_number" class="form-label">អ.ខ​​​/ឯ.អ</label>
                        <input type="text" class="form-control" id="member_id_number_docs_number" name="member_id_number_docs_number">
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-3">
                    <p>ព័ត៍មានលំអិត</p>
                    <div class="mb-3">
                        <label for="commune_select" class="form-label">ឃុំ/សង្កាត់</label>
                        <select class="form-select" id="commune_select" name="member_commune_id" onchange="loadLocation()">
                            <!-- Options will be populated dynamically -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="village_select" class="form-label">ភូមិ</label>
                        <select class="form-select" id="village_select" name="member_village_id">
                            <!-- Options will be populated dynamically -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="member_house_number" class="form-label">ខ្នងផ្ទះ</label>
                        <input type="text" class="form-control" id="member_house_number" name="member_house_number">
                    </div>
                    <div class="mb-3">
                        <label for="member_family_number" class="form-label">គ្រួសារទី</label>
                        <input type="number" class="form-control" id="member_family_number" name="member_family_number">
                    </div>
                    <div class="mb-3">
                        <label for="member_others" class="form-label">ទូរស័ព្ទ/ផ្សេងៗ</label>
                        <textarea class="form-control" id="member_others" name="member_others"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="member_migration_in" class="form-label">ចំណាកឃុំ</label>
                        <input type="text" class="form-control" id="member_migration_in" name="member_migration_in">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="member_migration_out" name="member_migration_out">
                        <label class="form-check-label" for="member_migration_out">
                            ក្រៅ
                        </label>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">ដាក់ស្នើរ</button>
        </form>
    </div>

    <x-app.footer />

</main>


<script>
    $(document).ready(function(){
        let commune = <?= json_encode($commune) ?>;
        console.log(commune)
        localStorage.setItem("commune", JSON.stringify(commune));
        loadLocation();
    })

    function loadLocation(){
        let commune_data = JSON.parse(localStorage.getItem("commune"));
        let commune_val  = $('#commune_select').val() ? $('#commune_select').val() : commune_data[0].code;



        let commune_select_html = ``;
        let village_select_html = ``;
        commune_data.forEach(c => {


            if(commune_val == c.code){
                commune_select_html +=`<option value ="${c.code}" selected>${c.name}</option>`;
            }else{
                commune_select_html +=`<option value ="${c.code}">${c.name}</option>`;
            }

            if(commune_val == c.code){
                c.villages.forEach(v =>{
                    village_select_html += `<option value ="${v.code}">${v.name}</option>`
                });
            }


        });





        $("#commune_select").html(commune_select_html);
        $("#village_select").html(village_select_html);

    }
</script>
