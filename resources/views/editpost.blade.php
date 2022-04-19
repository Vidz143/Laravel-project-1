<x-app-layout>
    <x-slot name="header">
       
      <h1>EDIT Post</h1>
    </x-slot>
  
  
  
  <html>
  <style>
  input[type=text], select {
    width: 60%;
    padding: 12px 20px;
    margin: 8px 0;
    margin-left: 60px;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  
  input[type=submit] {
    width: 60%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 10px 0;
     margin-left:100px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  
  input[type=submit]:hover {
    background-color: #45a049;
  }
  label{
    color: #f7f7f7;
    
  }
  textarea{
     margin-left: 60px;
     width:390px; 
     height:100px;
   }
  
  .container {
   
    background-image: radial-gradient(#f1f2b5 , #135058);
    height: 487px;
    padding: 20px;
  }
  .container1 {
    
    margin-left: 300px;
    border-radius: 25px;
    margin-top: 50px;
     background-image: radial-gradient(#f1f2b5 , #135058);
    padding: 20px;
    width: 700px;
    
    
  }
  
  </style>
  <body>
  
  
  
  <div class="container">
    <form method="post">
      @csrf
      @method('PUT')
      <div class="container1">
      <label for="fname">Title</label>
      <input type="text" id="fname" name="title" value="{{$post->title}}">
  <br>
   <label for="lname">body</label>
   <textarea  style="width:390px; height:100px; input type="text" name="body">
    
    {{$post->body}}
  </textarea>
  <br>
    
      <input type="submit" value="Update">
    </form>
   @if(session()->has('status'))
   <div>
   {{ session('status')}}</div>
   @endif

  </div>
  </body>
  </html>
  </x-app-layout>