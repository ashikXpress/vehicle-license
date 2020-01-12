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
                                    <strong>ক্রমিক নং - {{str_replace($en, $bn, $lastslicense->slno) }}</strong>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                    
                                    <strong>লাইসেন্স নং -</strong>
                                     <span style="border:1px solid #000; width:100px; height:20px;display: inline-block">  {{ str_replace($en, $bn, $lastslicense->licenseno) }} </span>
                                </div>  
                                <div class="col-md-12 text-center">
                                    <br><br>
                                    
                                    <h2><img src="{{url('/')}}/public/logo.png" width="50"> ফরিদপুর পৌরসভা</h2>
                                    <span style="font-size:20px;">পায়ে চালিত রিক্সা / ভ্যান চালকের লাইসেন্স <br>অর্থ বছর {{ str_replace($en, $bn, $lastslicense->year )}}</span> 
                                </div>
                                <div class="col-md-12" style="font-size:18px;line-height: 30px;">
                                    <br><br>
                                    <span style="margin-right:30px"></span>ইহা দ্বারা এই লাইসেন্স ১৯১৯ সালের বেঙ্গল এ্যাক্ট এর ৬৭ ধারা অধীনে পায়ে চালিত রিক্সা / ভ্যান চালকের এবং   আদর্শকর তফশিল ২০১৪ মোতাবেক<br><br><br>
                                    
                                    <table width="100%">

                                    	<tr>
                                    		<td>চালকের নাম</td>
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
                                    		<td>বয়স</td>
                                    		<td> : </td>
                                    		<td colspan="3"> {{str_replace($en, $bn,  $lastslicense->age) }} বৎসর</td>		 
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
                                       
                                        <span style="font-size:15px"><strong>ফিঃ  {{  str_replace($en, $bn, $lastslicense->licensefee ) }} </strong></span><br>
                                        <span style="font-size:15px"><strong>মোট টাকাঃ {{str_replace($en, $bn,  $lastslicense->licensefee) }} </strong></span>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4 text-center"> 
                                        
                                    </div>
                                </div>
                                <div class="col-md-12 text-center" style="padding-top:150px">  
                                    
                                    
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
                                    
                                    ফর্ম্ নং - ৩৭ (৯৪ বিধান দেখুন)<br>
                                    <strong>ক্রমিক নং - {{str_replace($en, $bn,  $lastslicense->slno) }}</strong>
                                </div>
                                <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                                    
                                    <strong>লাইসেন্স নং -</strong>
                                     <span style="border:1px solid #000; width:100px; height:20px;display: inline-block">  {{ str_replace($en, $bn, $lastslicense->licenseno) }} </span>
                                </div>  
                                <div class="col-md-12 text-center">
                                    <br><br>
                                    
                                    <h2><img src="{{url('/')}}/public/logo.png" width="40"> ফরিদপুর পৌরসভা</h2>
                                    <span style="font-size:20px;">ইজি বাইক / বোরাক চালকের লাইসেন্স <br> অর্থ বছর  {{ str_replace($en, $bn, $lastslicense->year )}}</span> 
                                </div>
                                <div class="col-md-12" style="font-size:18px;line-height: 30px;">
                                    
                                    <span style="margin-right:30px"></span>ইহা দ্বারা এই লাইসেন্স ১৯১৯ সালের বেঙ্গল এ্যাক্ট এর ৬৭ ধারা অধীনে ইজি বাইক চালকের এবং আদর্শকর তফশিল ২০১৪ মোতাবেক<br><br><br>
                                    <table width="100%">

                                    	<tr>
                                    		<td>চালকের নাম</td>
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
                                    		<td>বয়স</td>
                                    		<td> : </td>
                                    		<td colspan="3"> {{str_replace($en, $bn,  $lastslicense->age) }} বৎসর</td>		 
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
                                       
                                        <span style="font-size:15px"><strong>ফিঃ  {{  str_replace($en, $bn, $lastslicense->licensefee) }} </strong></span><br>
                                        <span style="font-size:15px"><strong>মোট টাকাঃ {{str_replace($en, $bn,  $lastslicense->licensefee) }} </strong></span>
                                    </div>
                                    <div class="col-md-4 col-sm-4 col-xs-4 text-center"> 
                                        
                                    </div>
                                </div>
                                <div class="col-md-12 text-center" style="padding-top:150px"> 
                                    
                                    
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