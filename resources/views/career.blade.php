@include('layouts.header')

<div class="container">
    <h2 align="center">Careers</h2>
    <form class="mx-1 mx-md-4" method="POST" action="{{url('/career_submit')}}" enctype="multipart/form-data">
    @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control"  name="name" id="name" placeholder="Enter your name">
            <span class="text-danger">
       @error('name')
{{$message}}
        @enderror
       </span>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email">
            <span class="text-danger">
       @error('email')
{{$message}}
        @enderror
       </span>
        </div>
        <div class="mb-3">
            <label for="resume" class="form-label">Resume</label>
            <input type="file" class="form-control" name="resume" id="resume">
            <span class="text-danger">
       @error('resume')
{{$message}}
        @enderror
       </span>
        </div>
        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" name="message" id="message" rows="3" placeholder="Enter your message"></textarea>
            <span class="text-danger">
       @error('message')
{{$message}}
        @enderror
       </span>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@include('layouts.footer')




