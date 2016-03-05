
@extends('admin')
@section('content')
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">

               Nhập điểm
            </div>
            <div class="panel-body">
                <form role="form">
                    <div class="form-group has-success">
                        <label class="control-label" for="success" >Năm học</label>
                        <input type="text" class="form-control" id="success" placeholder="2015-2016"/>
                    </div>
                    <div class="form-group has-success">
                        <label class="control-label" for="warning"> Học kỳ </label>
                        <input type="text" class="form-control" id="warning" placeholder="1"/>
                    </div>
                    <div class="form-group has-success">
                        <label class="control-label" for="error"> Lớp môn học </label>
                        <input type="text" class="form-control" id="error" placeholder="Mạng máy tính"/>
                    </div>
                    <div class="form-group has-success">
                        <label class="control-label" for="error"> Địa chỉ truy cập bảng điểm </label>
                        <input type="text" class="form-control" id="error" placeholder="http://www.coltech.vnu.edu.vn/Contents/attach/cacvandehdcntt-int3507_6.pdf"/>
                    </div>
                </form>
                <hr />
                <input type="submit" name="submit_name" class="btn btn-default" value="OK"/>
                <br><br>
                Chú ý: Giáo viên cần nhập đầy đủ thông tin
            </div>
        </div>
    </div>

@endsection;
