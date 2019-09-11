@foreach ($table['tRows'] as $tRow)
<tr>
    @foreach ($table['tHeads'] as $tHeadKey => $tHead)
        <td scope="row">
            {{ $tRow->$tHeadKey ?? 'hello'}}
        </td>
    @endforeach

    <td>
        <a href="{{ route( $table['action'].'_save', $tRow->id) }}" class="btn btn-warning">
            Izmeni
        </a>

        <form class="d-inline" action="{{ route( $table['action'].'_destroy', $tRow->id) }}" method="POST">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">
                Obrisi
            </button>
        </form>
    </td>
</tr>
@endforeach

