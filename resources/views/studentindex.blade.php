<table> 
    <tr>
        <th>Name</th>
        <th>Surname</th>
        <th>ICE_number</th>
        <th>address</th>
        <th>class</th>
        <th>hasInternship</th>
    </tr>
    @foreach($students as $student)
    <tr>
        <td>{{$student->name}}</td>
        <td>{{$student->surname}}</td>
        <td>{{$student->ICE_number}}</td>
        <td>{{$student->adress}}</td>
        <td>{{$student->class}}</td>
        <td>
            @if ($student->hasInternship)
            yes
            @else
            no
            @endif
        </td>
        <td><a href="/edit-student-form/{{$student->id}}" >Edit</a></td>
        <td>
        <form action="/delete-student/{{ $student->id }}" method="POST" >
                    @csrf
                    @method('DELETE')
                    <button type="submit" >Delete</button>
                </form>
                </td>
                
    </tr>

    @endforeach
</table>