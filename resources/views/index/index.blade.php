@extends('layout')
@section('content')
   <div class="container">
        <div class="row">
            <div class="col-lg-12">
	            <div class="col-lg-6">
	                <h1>Website môn học</h1>
	                <p> TRƯỜNG ĐẠI HỌC CÔNG NGHỆ - ĐẠI HỌC QUỐC GIA HÀ NỘI </p>
	            </div>
	            <!-- CHỌN HỌC KỲ -->
                <div class="col-lg-6">
                <div class="form-group">
				  <label for="sel1">Chọn học kỳ: </label>
				  <select class="form-control" id="sel1">
				  	<option>Tất cả</option>
				    <option>Học kỳ 1 - Năm 2013-2014</option>
				    <option>Học kỳ 2 - Năm 2013-2014</option>
				    <option>Học kỳ 1 - Năm 2014-2015</option>
				    <option>Học kỳ 2 - Năm 2014-2015</option>
				  </select>
				</div>
				</div>
				<!-- END CHỌN HỌC KỲ -->
            </div>
            <!-- KẾT QUẢ TÌM KIẾM -->
            <div class="col-lg-12">
            <p>Kết quả tìm kiếm cho <b>Mạng máy tính</b></p>
            <ul class="list-group">
            	<li class="list-group-item"> Mạng máy tính INT2013 3 - Học kỳ 2 - Năm 2013-2014</li>
            	<li class="list-group-item"> Mạng máy tính INT2013 3 - Học kỳ 1 - Năm 2014-2014</li>
            	<li class="list-group-item"> Mạng máy tính INT2013 3 - Học kỳ 2 - Năm 2012-2013</li>
            </ul>
            </div>
            <!-- END KẾT QUẢ TÌM KIẾM -->
        </div>
    </div>
    @endsection;