<div class="row justify-content-center mt-5 ">
   
        <img src="{{$image}}" class="col-md-3" alt="image">
        <div class="col-md-2"></div>
        <div class=" col-">
            <h3 class="">{{$name}}</h3>
            <p class="">Age :  &nbsp;&nbsp;   {{$age}}</p>
            <p class="">Gender : &nbsp;&nbsp;   {{$gender}}</p>
            <p class="">Date of birth : &nbsp;&nbsp;   {{"$dob"}}</p>
            
          
          
            @if ($type==1)
            <form action="{{url('/')}}/profilel" method="GET">
            <input hidden name="id" type="text" value="{{$id}}"> 
            <button type="submit"  class="mt-3 btn btn-sm btn-danger rounded-lg">View Full Profile</button>     
            </form>
            
            @endif


            @if ($type==2)

            <form action="{{url('/')}}/profilef" method="GET">
                <input hidden name="id" type="text" value="{{$id}}"> 
            <button type="submit" class="mt-3 btn btn-sm btn-danger rounded-lg">View Full Profile</button>     
            </form>
            
            @endif
            
             


             </div>
    </div>            
