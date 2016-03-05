 @extends('layout')
 @section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
	            <div class="col-lg-6">
	                <h1>Website môn học</h1>
	                <p> TRƯỜNG ĐẠI HỌC CÔNG NGHỆ - ĐẠI HỌC QUỐC GIA HÀ NỘI </p>
                    <br>
	            </div>
            </div>
            <!-- TÌM KIẾM NÂNG CAO -->
            <div class="col-lg-12">
                <div class="col-lg-2">Năm học</div>
                <div class="col-lg-2">Học kỳ</div>
                <div class="col-lg-2">Mã môn học</div>
                <div class="col-lg-2">Tên môn học</div>
                <div class="col-lg-4"></div>
            </div>
            <form>
            <div class="col-lg-12">
                <div class="col-lg-2"><input type="text"></input></div>
                <div class="col-lg-2"><input type="text"></input></div>
                <div class="col-lg-2"><input type="text"></input></div>
                 <div class="col-lg-2"><input type="text"></input></div>
                <!-- <div class="col-lg-2"><select>
                    <option>Học kỳ 1</option>
                    <option>Học kỳ 2</option> -->
                <!--   </select></input></input></div> -->
                <br><br>
                <div class="col-lg-4"><button type="submit">Tìm</button></div>
            </div>
            </form>
            <!-- END TÌM KIẾM NÂNG CAO -->

            <!-- KẾT QUẢ TÌM KIẾM -->
            <div class="col-lg-12">
            <br><br>
            <p>Kết quả tìm kiếm nâng cao</p>
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
