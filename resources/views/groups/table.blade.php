@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>List of Lecturer Group</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('groups.create') }}"> Add New Lecturer Group</a>
        </div>
    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>

@endif
<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Part</th>
        <th width="280px">Action</th>
    </tr>

    @foreach ($groups as $s)
    <tr>
        <td>{{ $s->id }}</td>
        <td>{{ $s->name }}</td>
        <td>{{ $s->part }}</td>
        <td>
            <form action="{{ route('groups.destroy',$s->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('groups.show',$s->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('groups.edit',$s->id) }}">Edit</a>
                
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
