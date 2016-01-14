@extends('template')

@section('titre')
    Liste
@endsection
<style>
    .portfolio-item {
        margin-bottom: 20px;
        margin-left:auto;
        margin-right: auto;
        max-width: 400px;

    }
    .titre_tache{
        padding-bottom: 2px;
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        background-color: #3580CF;
        margin-bottom: 0;
        height: 35px;
		

        text-align: center;
    }
    .lien{
       text-align: center;
        margin-right: -50px;
        text-decoration: none;
        color: white;
    }
    h1
    {
        text-align: center;
    }
	
    p{text-align: center;
        margin-top: -15px;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        background: #DCE0E6;
		padding-top:40px;
		padding-bottom:40px;
    }
    .bordure
    {
        margin-left: auto;
        margin-right: auto;
        max-width: 1200px;
		
    }
#row
{
    margin-left:0;
    margin-right:0;
}
</style>
@section('contenu')

    <h1>Sous-tâches</h1>
    <div class="row" id="row" style="margin-left:0;margin-right:0;" >

        @foreach($lists->where('user_id',Auth::user()->id) as $list)
            <div class="bordure">
                <div class="col-md-4 portfolio-item">
<h3 class="titre_tache">
    <a class="lien">{{$list->name}}</a>
    @if($list->Accompli==0)
    <a type="button" style="margin-top:2px;float: right;margin-right: 3px;" class="btn btn-info btn-sm" href="{{URL::to('/SousTacheFin/'.$list->id)}}">Fin</a>
@endif


</h3>

		          <a type="button" style="margin-top:5px;float: right;margin-right: 3px;" class="btn btn-primary btn-sm" href="{{URL::to('/vieweditSTache/'.$list->id)}}">Modifier</a>
          <a type="button" style="margin-top:5px;float: right;margin-right: 3px;" class="btn btn-danger btn-sm" href="{{URL::to('/deleteStache/'.$list->id)}}">Supprimer</a>
      <p style="height:35px; padding-top:20px;">Date de fin: {{$list->DateCrea}}


      </p>
                </div>
                @endforeach
            </div>

    </div>
@endsection <!---->