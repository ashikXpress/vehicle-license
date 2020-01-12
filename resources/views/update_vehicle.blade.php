
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
                        <form role="form" class="cmxform form-horizontal tasi-form" id="MenuForm"  method="post"  id="commentForm" action="{{ url('licence_update/'.$licencedetails->id) }}">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>লাইসেন্স ধরন *</strong></label>
                                <div class="col-lg-10">
                                    <select class="form-control m-bot15" name="license_type"  required>

                                        <option value="">লাইসেন্স নির্ধারন</option>
                                        <option @if($licencedetails->type == 1) {{ 'selected' }} @endif value="1">পায়ে চালিত রিক্সা / ভ্যান চালকের লাইসেন্স</option>
                                        <option  @if($licencedetails->type == 2) {{ 'selected' }} @endif value="2">ইজি বাইক / বোরাক চালকের লাইসেন্স</option>
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
                                            <option  @if($licencedetails->year == '20'.$i.'-'.($i+1) ) {{ 'selected' }}  @endif value="20{{$i}}-{{$i+1}}">{{ str_replace($en, $bn, $yr) }}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>চালকের নাম *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="চালকের নাম" id="" value="{{ $licencedetails->name }}" name="chalokname" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>পিতার নাম *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="পিতার নাম" id="" name="fname" value="{{ $licencedetails->fname }}"  required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>মাতার নাম *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="মাতার নাম" id="mname" name="mname" value="{{ $licencedetails->mname }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>চালকের বয়স *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="চালকের বয়স" id="age" value="{{ $licencedetails->age }}" name="age" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>জাতীয় পরিচয়পত্র নম্বর *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="চালকের ঠিকানা" id="nid" name="nid" value="{{ $licencedetails->nid }}">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>গ্রাম / মহল্লা *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="চালকের ঠিকানা" id="address" name="address"  value="{{ $licencedetails->address }}"  required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>উপজেলা *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="চালকের ঠিকানা" id="upjela" name="upjela"  value="{{ $licencedetails->upjela }}"  required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>পোস্ট *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="চালকের ঠিকানা" id="post" name="post"  value="{{ $licencedetails->post }}" required>
                                </div>
                            </div>



                            <div class="form-group">
                                <input type="hidden" value="{{$licencedetails->slno  }}" name="slno">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>লাইসেন্স নম্বর *</strong></label>

                                <div class="col-lg-10">
                                    <strong ><span style="text-align: right;font-size: 12px"> ক্রমিক নং : {{$licencedetails->slno  }}</span></strong>
                                    <input type="text" class="form-control" placeholder="লাইসেন্স নম্বর" id="licenseno" name="licenseno" value="{{ $licencedetails->licenseno }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>লাইসেন্স ফি *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="লাইসেন্স ফি" id="licencesfee" name="licencesfee"  value="{{ $licencedetails->licensefee }}" required>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info pull-right">দাখিল করুন</button>
                            <br/><br/>
                            <button data-dismiss="modal" align="right" class="btn btn-default pull-right" type="button">Close</button>

                        </form>

                    </div>
                </section>
            </div>
        </div>
    </section>
