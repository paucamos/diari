@extends('layouts.backend')
@section('content')


    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
        </div>
        <input id="search-bar-users" type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div id="contingut">
    @if(Auth::user()->user_type==1)
<div id="contingut">
        <table class="table">
            <th>Name</th><th>E-mail</th><th>Articles</th>
        @forelse($users as $user)
            @if($user->user_type != 1)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <?php $i=0; ?>
                @forelse($articles as $article)
                    @if($article->user_id == $user->id)
                        <?php $i++; ?>
                    @endif
                @empty
                @endforelse
                <td><?php echo "Total: ". $i; ?></td>
            @endif
        @empty
        @endforelse
        </table>
</div>
    @endif
    </div>
@endsection
@section('jquery')
    <script>

        $(document).ready(function () {
            $('#search-bar-users').keyup(function () {
                var input = $('#search-bar-users').val();
                $.ajax({
                    url: '{{route('listJournalists')}}?listJournalists='+input,
                    method: 'GET',
                    success: function (data, status) {
                       $('#contingut').html(data);
                    }
                });
            });
        });
    </script>
@endsection