<p>Click Here To Reset Password</p>

<a href="{{ $link=url('password/reset',$token).'?email='.urlencode($request->input('email')) }}">$link</a>