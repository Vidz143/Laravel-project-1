<x-app-layout>
    <x-slot name="header">
        
           <h3>Dashboard</h3>
       
    </x-slot>

    <html>
        <head>
        <style>
        #post {
          font-family: Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 80%;
          margin-left:100px;
        }
        
        #post td, #post th {
          border: 0px solid #ddd;
          padding: 10px;
        }
      
        #post th {
          padding-top: 12px;
          padding-bottom: 12px;
          text-align: left;
          background-color: #04AA6D;
          color: white;
        }
      
        .container {
    border-radius: 0px;
    background-image: radial-gradient(#f1f2b5 , #135058);
    height:  auto;
    padding: 30px;
    
  }

  .container1 {
   
    background-color: #302f2f;
    color:white;
    
  }
  .button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 2px 10px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 15px;
  margin: 5px 2px;
  cursor: pointer;
}

  .p{
    white-space: nowrap;
  }
  .p1{
    white-space: normal;
  }
        </style>
        </head>
        <body >
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        
            <div class="container">
                @if(session()->has('status'))
                <div>
                {{ session('status')}}</div>
                @endif
        
        <table id="post">
          <tr>
            
            <th>Name</th>
            <th>Title</th>
            <th>Body</th>
            <th>Action</th>
          </tr>
        
                        
                <tbody class="container1">
                     @foreach($posts as $post)
                     <tr>
                      
                         <td class="p">
                             {{$post->user->name}}
                         </td>
                                
                         
                           <td class="p">
                                {{$post->title}}
                            </td>
                             
                            <td class="p1">
                                
                              {{$post->body}}
                            </td>

                            <td class="p">
                              <a href="{{url('/post/delete',$post->id)}}"><i class="fa fa-trash"></i></a>
                              <a href="{{url('/post/edit',$post->id)}}"><i class="fa fa-edit"></i></a>
                         </td>
                             </tr>
                             @endforeach
                          
                     </tr>
                    </div>
                        </tbody>
                     </table>    
                     
                   
                </body>
                </html>     
                
</x-app-layout>

                        
             
        
         

