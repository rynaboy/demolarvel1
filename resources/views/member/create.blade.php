<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <div class="container">
        @include('components/app/navbar', ['title' => $title])
    </div>

    <div class="container mt-4">
        <form>
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-3">
                    <p>ព័ត៍មានបថម</p>
                    <div class="mb-3">
                        <label for="id_number" class="form-label">លេខអត្តសញ្ញាណបណ្ណ</label>
                        <input type="text" class="form-control" id="member_id_number" name="member_id_number">
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">នាមត្រកូល និងនាមខ្លួន</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="gender" class="form-label">ភេទ</label>
                        <select class="form-select" id="gender">
                            <option value="1">ប្រុស</option>
                            <option value="2">ស្រី</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="birth_year" class="form-label">ឆ្នាំកំណើត</label>
                        <input type="date" class="form-control" id="birth_year">
                    </div>
                    <div class="mb-3">
                        <label for="birth_place" class="form-label">ទីកន្លែងកំណើត</label>
                        <textarea class="form-control" id="birth_place"></textarea>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-3">
                    <p>ព័ត៍មានគណបក្ស</p>
                    <div class="mb-3">
                        <label for="party_role" class="form-label">តួនាទីបក្ស</label>
                        <select class="form-select" id="party_role">
                            <option value="1">សមាជិក</option>
                            <option value="2">អនុប្រធាន</option>
                            <option value="3">ប្រធាន</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="party_join_date" class="form-label">ថ្ងៃចូលបក្ស</label>
                        <input type="date" class="form-control" id="party_join_date">
                    </div>

                </div>



                <div class="col-md-6 col-lg-3 mb-3">
                    <p>ព័ត៍មានបោះឆ្នោត</p>
                    <div class="mb-3">
                        <label for="outside_vote" class="form-label">រាជធានី ខេត្ត	</label>
                        <input type="text" class="form-control" id="outside_vote">
                    </div>
                    <div class="mb-3">
                        <label for="village_vote" class="form-label">ឃុំ សង្កាត់	</label>
                        <input type="text" class="form-control" id="village_vote">
                    </div>
                    <div class="mb-3">
                        <label for="phone_other_vote" class="form-label">ការិយាល័យបោះឆ្នោត
                        </label>
                        <input type="text" class="form-control" id="village_vote">
                    </div>
                    <div class="mb-3">
                        <label for="document_type" class="form-label">ប្រភេទឯកសារ</label>
                        <select class="form-select" id="document_type">
                            <option value="1">អ.ខ៣</option>
                            <option value="2">ឯ.អ</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="document_number" class="form-label">អ.ខ​​​/ឯ.អ</label>
                        <input type="text" class="form-control" id="document_number">
                    </div>

                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <p>ព័ត៍មានលំអិត</p>
                    <div class="mb-3">
                  </div>

                    <div class="mb-3">
                        <label for="party_role" class="form-label">ភូមិ</label>
                        <select class="form-select" id="party_role">
                            <option value="1">សមាជិក</option>
                            <option value="2">អនុប្រធាន</option>
                            <option value="3">ប្រធាន</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="village" class="form-label">ខ្នងផ្ទះ</label>
                        <input type="text" class="form-control" id="village">
                    </div>
                    <div class="mb-3">
                        <label for="village" class="form-label">គ្រួសារទី</label>

                        <input type="number" class="form-control" id="village">
                    </div>
                    <div class="mb-3">
                        <label for="phone_other" class="form-label">ទូរស័ព្ទ/ផ្សេងៗ</label>
                        <textarea class="form-control" id="phone_other"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="village" class="form-label">ចំណាកឃុំ</label>
                        <input type="text" class="form-control" id="village">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            ក្រៅ
                        </label>
                      </div>

                </div>
            </div>

            <button type="submit" class="btn btn-primary">ដាក់ស្នើរ</button>
        </form>
    </div>
</main>
