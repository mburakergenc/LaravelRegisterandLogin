<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
             <h2 style="color:white" class="form-signin-heading">Welcome User, C'mon in!</h2>
            <div class="account-wall">
            	 <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">

{{ Form::open(array('url'=>'users/signin', 'class'=>'form-signin')) }}
  


    {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}

    {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}

 
    {{ Form::submit('Login', array('class'=>'btn btn-lg btn-primary btn-block'))}}
{{ Form::close() }}
 </div> 
</div>
    </div>
</div>

