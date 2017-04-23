  @extends('main')
  @section('title','| Contact')
  @section('content')
  <div class="row">
    <div class="col-md-12">
    <form>
    {{csrf_field()}};
      <div class="form-group">
        <label name="email">Email:</label>
        <input type="email" name="email" class="form-control" placeholder="example@gmail.com">
      </div>
       <div class="form-group">
        <label name="Subject">Subject:</label>
        <input type="text" name="email" class="form-control" placeholder="Subject">
      </div>
       <div class="form-group">
        <label name="message">Message:</label>
      <textarea name="message" class="form-control" placeholder="Type your message...."></textarea>
      </div>
      
        <input type="button" name="submit" value="Send Message" class="btn btn-success">
      
      </form>
  </div>

       
@endsection