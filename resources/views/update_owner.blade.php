

    <section class="wrapper site-min-height">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                       <h3>যানবাহন মালিকের লাইসেন্স</h3>
                    </header>
                     @if (session('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                     @endif
                    <div class="panel-body">
                        <form role="form" class="cmxform form-horizontal tasi-form" id="MenuForm"  method="post"  id="commentForm" action="{{ url('update_owner/'.$ownerdetaild->id )}}">
                            {{csrf_field()}}
                            <div class="form-group">

                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>লাইসেন্স ধরন *</strong></label>
                                <div class="col-lg-10">
                                    <select class="form-control m-bot15" name="license_type"  required>

                                        <option value="">লাইসেন্স নির্ধারন</option>
                                        <option  @if($ownerdetaild->type ==1 ) {{ 'selected' }} @endif value="1">পায়ে চালিত রিক্সা / ভ্যান মালিকের লাইসেন্স</option>
                                        <option  @if($ownerdetaild->type ==2 ) {{ 'selected' }} @endif value="2">ইজি বাইক / বোরাক মালিকের লাইসেন্স</option>
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" value="{{ $ownerdetaild->slno }}"   name="slno">
                            <div class="form-group">
                                    <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>অর্থ বছর *</strong></label>
                                    <div class="col-lg-10">
                                        <select class="form-control m-bot15" name="year"  required>

                                            <option value="">অর্থ বছর নির্ধারন</option>

                                            @for($i=19; $i<=date('y'); $i++)

                                                @php($yr = '20'.$i.'-'.($i+1))
                                                <option  @if($ownerdetaild->year == '20'.$i.'-'.($i+1) ) {{ 'selected' }}  @endif value="20{{$i}}-{{$i+1}}">{{ str_replace($en, $bn, $yr) }}</option>

                                            @endfor
                                        </select>
                                    </div>
                            </div>

                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>মালিকের নাম *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="মালিকের নাম" id="" value="{{ $ownerdetaild->name }}" name="chalokname" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>পিতার/স্বামীর নাম *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="পিতার নাম" id="" value="{{ $ownerdetaild->fname }}" name="fname" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>মাতার নাম *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="মাতার নাম"  value="{{ $ownerdetaild->mname }}" id="mname" name="mname" required>
                                </div>
                            </div>


                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>জাতীয় পরিচয়পত্র নম্বর *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="জাতীয় পরিচয়পত্র নম্বর" value="{{ $ownerdetaild->nid }}" id="nid" name="nid">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>গ্রাম / মহল্লা *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="গ্রাম / মহল্লা" id="address" name="address" value="{{ $ownerdetaild->address }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>উপজেলা *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="উপজেলা" id="upjela" name="upjela"  value="{{ $ownerdetaild->upjela }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>পোস্ট *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="পোস্ট" id="post" name="post"  value="{{ $ownerdetaild->post }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>মডেল নম্বর *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="মডেল নম্বর" id="modelno" name="modelno" value="{{ $ownerdetaild->modelno }}"  required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>লাইসেন্স নম্বর *</strong></label>
                                <div class="col-lg-10">
                                    <strong ><span style="text-align: right;font-size: 12px"> ক্রমিক নং : {{$ownerdetaild->slno  }}</span></strong>

                                    <input type="text" class="form-control" placeholder="লাইসেন্স নম্বর" id="licenseno" name="licenseno" value="{{ $ownerdetaild->licenseno }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>লাইসেন্স ফি *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="লাইসেন্স ফি" id="licencesfee" name="licencesfee"  value="{{ $ownerdetaild->licensefee }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>টিন প্লেটের মূল্য *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="টিন প্লেটের মূল্য" id="tinplate" name="tinplate"  value="{{ $ownerdetaild->tinplate }}"  required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>নাম্পত্তন ফি *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="নাম্পত্তন ফি" id="registerfee" name="registerfee" value="{{ $ownerdetaild->registerfee }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>আয়কর *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="আয়কর" id="incotax" name="incotax" value="{{ $ownerdetaild->incotax }}" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputSuccess" class="col-sm-2 control-label col-lg-2"><strong>ভ্যাট *</strong></label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" placeholder="ভ্যাট" id="vat" name="vat"  value="{{ $ownerdetaild->vat }}"required>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-info pull-right">দাখিল করুন</button>
                        </form>
                        <br/><br/>

                        <button data-dismiss="modal" align="right" class="btn btn-default pull-right" type="button">Close</button>

                    </div>
                </section>
            </div>
        </div>
    </section>
