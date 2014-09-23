    <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2"> 



<div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">Sign Up</div>
                            <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="login" onclick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a></div>
                        </div>  
                        <div class="panel-body" >
                            
                                {{ Form::open(array('url'=>'users/create', 'class'=>'form-horizontal')) }}
                                <ul>
                                     @foreach($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                         @endforeach
                                </ul>
                                
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                    
                                
                                  
                                <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">First Name</label>
                                    <div class="col-md-9">
                                       {{ Form::text('firstname', null, array('class'=>'form-control', 'placeholder'=>'')) }}
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="firstname" class="col-md-3 control-label">Last Name</label>
                                    <div class="col-md-9">
                                          {{ Form::text('lastname', null, array('class'=>'form-control', 'placeholder'=>'')) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="lastname" class="col-md-3 control-label">Email Adress</label>
                                    <div class="col-md-9">
                                       {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'')) }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="password" class="col-md-3 control-label">Password</label>
                                    <div class="col-md-9">
                                     {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'')) }}
                                    </div>
                                </div>
                                    
                                <div class="form-group">
                                    <label for="icode" class="col-md-3 control-label">Confirm Password</label>
                                    <div class="col-md-9">
                              {{ Form::password('password_confirmation', array('class'=>'form-control', 'placeholder'=>'')) }}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-3 col-md-9">
                                     {{ Form::submit('Register', array('class'=>'btn btn-info'))}}
                                        <span style="margin-left:8px;">or</span>  
                                    </div>
                                </div>
                                
                                <div style="border-top: 1px solid #999; padding-top:20px"  class="form-group">
                                    
                                    <div class="col-md-offset-3 col-md-9">
                                        <button id="btn-fbsignup" type="button" class="btn btn-primary"><i class="icon-facebook"></i>   Sign Up with Facebook</button>
                                    </div>                                           
                                        
                                </div>
                                
                                
                                
                            {{ Form::close() }}
                         </div>
                    </div>

               
               
                
         </div> 
    </div>