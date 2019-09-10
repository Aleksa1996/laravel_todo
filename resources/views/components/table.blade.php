<div class="table-wrapper">
    <div class="table-title">
        <div class="row">
            <div class="col-sm-8">
                <h2>{{ $table['name'] }}</h2>
            </div>
            <div class="col-sm-4">
                <a href="{{ route( $table['action'].'_save') }}" class="btn btn-info add-new">
                    <i class="fa fa-plus"></i>
                    Dodaj
                </a>
            </div>
        </div>
    </div>

    <table class="table table-hover">
        <thead>
            @include('components.tableHead',['table'=>$table])
        </thead>
        <tbody>
            @include('components.tableRow',['table'=>$table])
        </tbody>
    </table>
</div></div>
