@extends('admin')
@section('content')
<div class="col-md-6">
                  <!--   Bang nam hoc -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Danh sách năm học
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên năm học</th>
                                            <th> Thời gian bắt đầu </th>
                                            <th> Thời gian kết thúc </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>N1</td>
                                            <td>2011-2012</td>
                                            <td>2011</td>
                                            <td>2012</td>
                                        </tr>
                                        <tr>
                                            <td>N2</td>
                                            <td>2012-2013</td>
                                            <td>2012</td>
                                            <td>2013</td>
                                        </tr>
                                        <tr>
                                            <td>N3</td>
                                            <td>2013-2014</td>
                                            <td>2013</td>
                                            <td>2014</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Bang nam hoc-->

                     <!--   Bang hoc ky -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Danh sách học kỳ
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Tên học kỳ </th>
                                            <th> ID năm học </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>H1</td>
                                            <td> Học kỳ 1 </td>
                                            <td>N1</td>
                                        </tr>
                                        <tr>
                                            <td>H2</td>
                                            <td> Học kỳ 2 </td>
                                            <td> N1 </td>
                                        </tr>
                                        <tr>
                                            <td>H1</td>
                                            <td> Học kỳ 1 </td>
                                            <td>N2</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Bang hoc ky -->



@endsection;
