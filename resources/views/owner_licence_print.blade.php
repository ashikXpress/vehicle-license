@extends('layouts.admin')

@section('content')


    <section class="wrapper site-min-height" style="background: #fff;">
        <div class="row">
            <div class="col-lg-12">
                <section class="panel">
                    
                    <div class="panel-body" style="background: #fff; color:#000">
                        <button class="btn btn-default pull-right" onclick="getprint('printable')">Print</button><br><hr><br>
                        @php($yr = explode('-', $lastslicense->year))
                        @if($lastslicense->type == 1)
                        
                            <div id="printable">
                                
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    ফর্ম্ নং -৩৬ (৯৪ বিধান দেখুন)<br>
                                    <strong>ক্রমিক নং - {{ str_replace($en, $bn, $lastslicense->slno) }}</strong>
                                </div>
                                
                                <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                    
                                    <strong>লাইসেন্স নং -</strong>
                                     <span style="border:1px solid #000; width:100px; height:20px;display: inline-block">  {{  str_replace($en, $bn, $lastslicense->licenseno) }} </span>
                                </div>  
                                
                                <div class="col-md-12 text-center">
                                    <br><br>
                                    
                                    <h2 style="font-size:35px;" ><img src="{{url('/')}}/public/logo.png" width="50"> ফরিদপুর পৌরসভা</h2>
                                    <span style="font-size:20px;">পায়ে চালিত রিক্সা / ভ্যান মালিক লাইসেন্স <br>অর্থ বছর {{ str_replace($en, $bn, $lastslicense->year )}}</span> 
                                </div>
                                
                                <div class="col-md-12" style="font-size:15px">
                                    
                                    <center><span style="margin-right:30px"></span> ১৯১৯ সালের বেঙ্গল এ্যাক্ট এর ৬২ ধারা অনুযায়ী রিক্সা/ভ্যান লাইসেন্স </center><br><br><br>
                                    <table width="100%">

                                    	<tr>
                                    		<td>মালিকের নাম</td>
                                    		<td> : </td>
                                    		<td colspan="3">  {{ $lastslicense->name }}</td>		 
                                    	</tr>
                                    	<tr>
                                    		<td>পিতার নাম</td>
                                    		<td> : </td>
                                    		<td colspan="3"> {{ $lastslicense->fname }}</td>		 
                                    	</tr>
                                    	<tr>
                                    		<td>মাতার নাম</td>
                                    		<td> : </td>
                                    		<td colspan="3"> {{ $lastslicense->mname }}</td>		 
                                    	</tr>
                                    	<tr>
                                    		<td>জাতীয় পরিচয়পত্র নম্বর</td>
                                    		<td> : </td>
                                    		<td colspan="3">  {{str_replace($en, $bn,  $lastslicense->nid) }} </td>		 
                                    	</tr>	
                                    	<tr>
                                    		<td>গ্রাম / মহল্লা</td>
                                    		<td> : </td>
                                    		<td width="25%"> {{ $lastslicense->address }}</td>
                                    		<td>উপজেলা</td>
                                    		<td> : </td>
                                    		<td width="25%">  {{ $lastslicense->upjela }}</td>
                                    	</tr>
                                    	<tr>
                                    		<td>পোস্ট</td>
                                    		<td> : </td>
                                    		<td> {{ $lastslicense->post }}</td>
                                    		<td>জেলা</td>
                                    		<td> : </td>
                                    		<td>ফরিদপুর।</td>
                                    	</tr>
                                    </table>

                                    <br>
                                    এই লাইসেন্স ২০{{str_replace($en, $bn, $yr[1])}} সালের ৩০ জুন পর্যন্ত বলবৎ থাকিবে যদি না সত্বর বাতিল বা রদ করা হয়।<br><br><br>
                                </div>    
                                
                                <div class="col-md-12"> 
                                    <div class="col-md-3 col-sm-3  col-xs-3"> 
                                        
                                    </div>
                                    <div class="col-md-4 col-sm-4  col-xs-4 text-right"> 
                                       
                                       
                                    
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4 text"> 
                                        <table style="width: 100%; font-weight: bold;">

                                        	<tr>
                                        		<td>লাইসেন্স ফি</td>
                                        		<td> : </td>
                                        		<td>  {{ str_replace($en, $bn, $lastslicense->licensefee) }}</td>		 
                                        	</tr>
                                        	<tr>
                                        		<td>নাম্পত্তন ফি</td>
                                        		<td> : </td>
                                        		<td>  {{ str_replace($en, $bn, $lastslicense->registerfee) }}</td>		 
                                        	</tr>
                                        	<tr>
                                        		<td>আয়কর</td>
                                        		<td> : </td>
                                        		<td>  {{ str_replace($en, $bn, $lastslicense->incotax) }}</td>	 
                                        	</tr>
                                        	<tr>
                                        		<td>ভ্যাটঃ</td>
                                        		<td> : </td>	
                                        		<td>  {{ str_replace($en, $bn, $lastslicense->vat) }}</td>	 
                                        	</tr>
                                        	<tr>
                                        		<td>টিন প্লেটের মূল্য</td>
                                        		<td> : </td>	
                                        		<td>  {{ str_replace($en, $bn, $lastslicense->tinplate) }}</td>	 
                                        	</tr>
                                        	<tr>
                                        		<td>মোট টাকা</td>
                                        		<td> : </td>	
                                        		<td> {{  str_replace($en, $bn,( $lastslicense->licensefee  +  $lastslicense->vat +  $lastslicense->tinplate  +  $lastslicense->registerfee  +  $lastslicense->incotax)) }}</td>	 
                                        	</tr>
                                        	
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center" style="padding-top:200px">  
                                    
                                    
                                    <div class="col-md-4 col-sm-4  col-xs-4 text-center"> 
                                        তারিখঃ {{ str_replace($en, $bn, date('d-m-Y')) }}
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4 text-center"> 
                                        <strong>লাইসেন্স পরিদর্শক</strong><br>
                                        ফরিদপুর পৌরসভা
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4 text-center"> 
                                        <strong>মেয়র</strong><br>
                                        ফরিদপুর পৌরসভা
                                    </div>
                                </div>
                                
                            </div>
                        @else
                        
                        
                             <div id="printable">
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                    ফর্ম্ নং -৩৬ (৯৪ বিধান দেখুন)<br>
                                    <strong>ক্রমিক নং - {{ str_replace($en, $bn, $lastslicense->slno) }}</strong>
                                </div>
                                
                                <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                    
                                    <strong>লাইসেন্স নং -</strong>
                                     <span style="border:1px solid #000; width:100px; height:20px;display: inline-block">  {{  str_replace($en, $bn, $lastslicense->licenseno) }} </span>
                                </div>  
                                
                                <div class="col-md-12 text-center">
                                    <br><br>
                                    
                                    <h2 style="font-size:35px;" ><img src="{{url('/')}}/public/logo.png" width="50"> ফরিদপুর পৌরসভা</h2>
                                    <span style="font-size:20px;">ইজি বাইক / বোরাক মালিকের লাইসেন্স <br> অর্থ বছর  {{ str_replace($en, $bn, $lastslicense->year )}}</span> 
                                </div>
                                <div class="col-md-12" style="font-size:16px">
                                    
                                    <span style="margin-right:30px"> আদর্শ পৌরকর তফশিল ২০১৪ এর ৬ ধারা অনুচ্ছেদ ১৭(৩) মোতাবেক </span><br><br>
                                    <table width="100%">

                                    	<tr>
                                    		<td>মালিকের নাম</td>
                                    		<td> : </td>
                                    		<td colspan="3">  {{ $lastslicense->name }}</td>		 
                                    	</tr>
                                    	<tr>
                                    		<td>পিতার নাম</td>
                                    		<td> : </td>
                                    		<td colspan="3"> {{ $lastslicense->fname }}</td>		 
                                    	</tr>
                                    	<tr>
                                    		<td>মাতার নাম</td>
                                    		<td> : </td>
                                    		<td colspan="3"> {{ $lastslicense->mname }}</td>		 
                                    	</tr>
                                    	
                                    	<tr>
                                    		<td>জাতীয় পরিচয়পত্র নম্বর</td>
                                    		<td> : </td>
                                    		<td colspan="3">  {{str_replace($en, $bn,  $lastslicense->nid) }} </td>		 
                                    	</tr>	
                                    	<tr>
                                    		<td>গ্রাম / মহল্লা</td>
                                    		<td> : </td>
                                    		<td width="25%"> {{ $lastslicense->address }}</td>
                                    		<td>উপজেলা</td>
                                    		<td> : </td>
                                    		<td width="25%">  {{ $lastslicense->upjela }}</td>
                                    	</tr>
                                    	<tr>
                                    		<td>পোস্ট</td>
                                    		<td> : </td>
                                    		<td> {{ $lastslicense->post }}</td>
                                    		<td>জেলা</td>
                                    		<td> : </td>
                                    		<td>ফরিদপুর।</td>
                                    	</tr>
                                    </table>

                                    <br>
                                    এই লাইসেন্স ২০{{str_replace($en, $bn, $yr[1])}} সালের ৩০ জুন পর্যন্ত বলবৎ থাকিবে যদি না সত্বর বাতিল বা রদ করা হয়।<br><br><br>
                                </div>    
                                <div class="col-md-12"> 
                                    <div class="col-md-3 col-sm-3  col-xs-3"> 
                                        
                                    </div>
                                    <div class="col-md-4 col-sm-4  col-xs-4 text-right"> 
                                       
                                       
                                        
                                    
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4"> 
                                        <table style="width: 100%;font-weight: bold;">
    
                                        	<tr>
                                        		<td>লাইসেন্স ফি</td>
                                        		<td> : </td>
                                        		<td>  {{ str_replace($en, $bn, $lastslicense->licensefee) }}</td>		 
                                        	</tr>
                                        	<tr>
                                        		<td>নাম্পত্তন ফি</td>
                                        		<td> : </td>
                                        		<td>  {{ str_replace($en, $bn, $lastslicense->registerfee) }}</td>		 
                                        	</tr>
                                        	<tr>
                                        		<td>আয়কর</td>
                                        		<td> : </td>
                                        		<td>  {{ str_replace($en, $bn, $lastslicense->incotax) }}</td>	 
                                        	</tr>
                                        	<tr>
                                        		<td>ভ্যাটঃ</td>
                                        		<td> : </td>	
                                        		<td>  {{ str_replace($en, $bn, $lastslicense->vat) }}</td>	 
                                        	</tr>
                                        	<tr>
                                        		<td>টিন প্লেটের মূল্য</td>
                                        		<td> : </td>	
                                        		<td>  {{ str_replace($en, $bn, $lastslicense->tinplate) }}</td>	 
                                        	</tr>
                                        	<tr>
                                        		<td>মোট টাকা</td>
                                        		<td> : </td>	
                                        		<td> {{  str_replace($en, $bn,( $lastslicense->licensefee  +  $lastslicense->vat +  $lastslicense->tinplate  +  $lastslicense->registerfee  +  $lastslicense->incotax)) }}</td>	 
                                        	</tr>
                                        	
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-12 text-center" style="padding-top:200px">  
                                    
                                    
                                    <div class="col-md-4 col-sm-4  col-xs-4 text-center"> 
                                        তারিখঃ {{ str_replace($en, $bn, date('d-m-Y')) }}
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4 text-center"> 
                                        <strong>লাইসেন্স পরিদর্শক</strong><br>
                                        ফরিদপুর পৌরসভা
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4 text-center"> 
                                        <strong>মেয়র</strong><br>
                                        ফরিদপুর পৌরসভা
                                    </div>
                                </div>
                                
                            </div>
                        
                        
                        @endif
                    </div>
                </section>
            </div>
        </div>
    </section>
    
    
    <script>
        var APP_URL = {!! json_encode(url('/')) !!};
        function getprint(id){
            
            $('body').html($('#'+id).html());
            window.print();
            window.location.replace(APP_URL+"/vehicle-license")
        }
        
    </script>
@endsection