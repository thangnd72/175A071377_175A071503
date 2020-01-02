<section class="student mt-5">
    <div class="container">
        <div class="card">
            <h5 class="card-header text-center font-weight-bold" style="font-size:2.2rem;">Tra Cứu Điểm Sinh Viên</h5>
            <div class="card-body">
                <div class="row d-flex">
                    <div class="col-md-6 col-12">
                        <div class="d-flex">
                            <div class="mt-5">
                                <form>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">Mã sinh viên:</label>
                                        <input type="text" class="form-control" id="studentCode" name="studentCode" placeholder="Mã sinh viên">
                                        <div class="invalid-feedback" style="font-size: 12px"> Mã sinh viên được yêu cầu.</div>
                                    </div>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput2">CMTND:</label>
                                        <input type="text" class="form-control" id="cmt" name="cmt" placeholder="Chứng minh thư">
                                        <div class="invalid-feedback" style="font-size: 12px">Chứng minh thư được yêu cầu.</div>
                                    </div>
                                    <button type="button" id="searchMark" class="btn btn-primary">Tra cứu</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Năm học</label>
                            </div>
                            <select class="custom-select" id="yearSchool">
                                <option value="2019-2020" selected>2019-2020</option>
                                <option value="2018-2019">2018-2019</option>
                                <option value="2017-2018">2017-2018</option>
                                <option value="2016-2017">2016-2017</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Học kỳ</label>
                            </div>
                            <select class="custom-select" id="term">
                                <option value="Học kỳ 1" selected>Học kỳ 1</option>
                                <option value="Học kỳ 2">Học kỳ 2</option>
                            </select>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="inputGroupSelect01">Giai đoạn</label>
                            </div>
                            <select class="custom-select" id="stage">
                                <option selected>Giai đoạn 1</option>
                                <option value="Giai đoạn 2">Giai đoạn 2</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 mt-5 mb-5">
                        <div id="viewStudent"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
