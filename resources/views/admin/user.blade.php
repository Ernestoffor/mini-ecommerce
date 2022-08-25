<div class="justiy-content: center">
    <h1>
        Users
    </h1>
    <div class="table">

    <table>
            <thead>
                <tr>
                    <th >Name </th>
                    <th > Email</th>
                   
                </tr>
            </thead>

            <tbody>
               
                @foreach($user as $item)
                
                    <tr style="margin: 10px;">
                            <td  >{{$item->name}}</td>
                            <td >  {{$item->email}} </td>
                            
                              
                      
                    </tr>
                @endforeach
            </tbody>
        </div>
        </table>
    </div>

</div>