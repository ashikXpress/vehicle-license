@extends('layouts.admin')

@section('content')


    <section class="wrapper site-min-height">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                       <h3>সকল যানবাহন চালকের লাইসেন্স</h3>

                    </header>
                    <div class="row">
                        <form action="" class="col-md-12">
                            <div class="form-group type-car" style="margin-top: 20px;">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>লাইসেন্স এর ধরন</strong></label>
                                <div class="col-lg-5">
                                    <select class="form-control m-bot15" name="vehicle_type"  required>

                                        <option selected disabled>লাইসেন্স নির্ধারন</option>
                                        <option value="1" {{ request()->get('vehicle_type') == '1' ? 'selected' : '' }}>পায়ে চালিত রিক্সা / ভ্যান চালকের লাইসেন্স</option>
                                        <option  value="2" {{ request()->get('vehicle_type') == '2' ? 'selected' : '' }}>ইজি বাইক / বোরাক চালকের লাইসেন্স</option>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <button class="btn btn-default">Submit</button>
                                </div>
                            </div>
                        </form>

                    </div>





                     @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>

                     @endif
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="panel-body">
                        <div class="adv-table">
                            <table class="display table table-bordered" id="myTable">
                                <thead>
                                    <tr>
                                        <th>ক্রমিক নং</th>
                                        <th>ধরন</th>
                                        <th>অর্থ বছর</th>
                                        <th>নাম</th>
                                        <th>পিতার নাম</th>
                                        <th>ঠিকানা</th>
                                        <th>লাইসেন্স নং</th>
                                        <th>প্রক্রিয়া</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @foreach($alldriver as $data)
                                    <tr class="gradeX">
                                        <td>{{str_replace($en, $bn, $data->slno) }}</td>
                                        <td> @if($data->type==1){{ 'পায়ে চালিত রিক্সা / ভ্যান' }} @else {{ 'ইজি বাইক / বোরাক' }} @endif </td>
                                        <td>{{str_replace($en, $bn, $data->year)}}</td>
                                        <td>{{$data->name }}</td>
                                        <td>{{$data->fname }}</td>
                                        <td>{{$data->address}}</td>
                                        <td>{{str_replace($en, $bn, $data->licenseno)}}</td>


                                        <td width="7%">

                                            <a class="btn btn-primary btn-xs" href="{{url('/')}}/driving/{{ $data->id }}" target="_blank">Print</a>
                                            <button  class="btn btn-default btn-xs" style="margin-top: 2px" type="button" onclick="editlicence({{ $data->id }})">Edit</button>

                                        </td>

                                    </tr>
                                @endforeach

                                </tbody>
                            </table>

                            <div class="modal fade" id="myModalEdit"   tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl" style="width: 70%;">
                                    <div class="">
                                        <div class="modal-body" id="owner_edit"></div>


                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <script>

        function editlicence(id) {


            $.ajax({
                type: "get",
                url: "licence_update",
                data: {'id': id},
                success: function (data) {
                    $("#myModalEdit").modal();
                    $("#owner_edit").html(data)
                }
            });
        }


    </script>
@endsection
