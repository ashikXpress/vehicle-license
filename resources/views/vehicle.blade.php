@extends('layouts.admin')

@section('content')


    <section class="wrapper site-min-height">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                       <h3>যানবাহন চালকের লাইসেন্স</h3>
                    </header>
                     @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                     @endif
                    <div class="panel-body">
                        <form role="form" class="cmxform form-horizontal tasi-form" id="MenuForm"  method="post"  id="commentForm" action="">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>লাইসেন্স ধরন *</strong></label>
                                <div class="col-lg-10">
                                    <select class="form-control m-bot15" name="license_type"  required>

                                        <option value="">লাইসেন্স নির্ধারন</option>
                                        <option value="1">পায়ে চালিত রিক্সা / ভ্যান চালকের লাইসেন্স</option>   
                                        <option value="2">ইজি বাইক / বোরাক চালকের লাইসেন্স</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>অর্থ বছর *</strong></label>
                                <div class="col-lg-10">
                                    <select class="form-control m-bot15" name="year"  required>

                                        <option value="">অর্থ বছর নির্ধারন</option>
                                        
                                        @for($i=19; $i<=date('y'); $i++)
                                             
                                            @php($yr = '20'.$i.'-'.($i+1))
                                            <option value="20{{$i}}-{{$i+1}}">{{ str_replace($en, $bn, $yr) }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>চালকের নাম *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="চালকের নাম" id="" name="chalokname" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>পিতার নাম *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="পিতার নাম" id="" name="fname" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>মাতার নাম *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="মাতার নাম" id="mname" name="mname" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>চালকের বয়স *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="চালকের বয়স" id="age" name="age" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>জাতীয় পরিচয়পত্র নম্বর *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="চালকের ঠিকানা" id="nid" name="nid">
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>গ্রাম / মহল্লা *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="চালকের ঠিকানা" id="address" name="address" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>উপজেলা *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="চালকের ঠিকানা" id="upjela" name="upjela" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>পোস্ট *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="চালকের ঠিকানা" id="post" name="post" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>লাইসেন্স নম্বর *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="লাইসেন্স নম্বর" id="licenseno" name="licenseno" required>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>লাইসেন্স ফি *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="লাইসেন্স ফি" id="licencesfee" name="licencesfee" required>
                                </div>
                            </div>
    
                            <button type="submit" class="btn btn-info pull-right">দাখিল করুন</button>
                        </form>
    
                    </div>
                </section>
            </div>
        </div>
    </section>
@endsection