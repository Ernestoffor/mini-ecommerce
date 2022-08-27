<div class="justiy-content: center">
    <h1>
        Users
    </h1>
    <div class="table">

    <table>
            <thead>
                <tr>
                    <th style="border: 2px solid black;">Name </th>
                    <th  style="border: 2px solid black;"> Email</th>
                   
                </tr>
            </thead>

            <tbody>
               
                @foreach($user as $item)
                
                    <tr style="margin: 10px;">
                            <td  style="border: 2px solid black;">{{$item->name}}</td>
                            <td  style="border: 2px solid black;">  {{$item->email}} </td>
                            
                              
                      
                    </tr>
                @endforeach
            </tbody>
        </div>
        </table>
    </div>

</div>