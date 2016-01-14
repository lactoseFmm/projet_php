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
text-align:center;
text-decoration: none;
        color: white;
		
    }
    h1
    {
        text-align: center;
    }
    p{
		text-align: left;
        margin-top: -15px;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        background: #DCE0E6;
		padding-top: 10px;
		padding-bottom: 40px;
		
    }
    .bordure
    {
        margin-left: auto;
        margin-right: auto;
        max-width: 1200px;
    }

</style>

@section('contenu')
    <h1>Listes des tâches</h1>
    <div class="row">

    @foreach($tasks as $task)
        <div class="bordure">
            <div class="col-md-4 portfolio-item">
      <h3 class="titre_tache">
              <a class="lien" id="{{$task->id}}">{{$task->name}}</a>


      </h3>
	  
	  	     <a type="button" style="margin-top:15px;float: right;margin-right: 10px; " class="btn btn-primary btn-sm" href="{{URL::to('/update/'.$task->id)}}">Modifier</a>
            <a type="button" style="margin-top:15px;float: right;margin-right: 3px;" class="btn btn-danger btn-sm" href="{{URL::to('/Delete/'.$task->id)}}">Supprimer</a>
       <p>

			  
			  {{$task->descriptionTache}}

           @if($lists->where('task_id',$task->id) )
              <a style="color:red;">{{$lists->where('Accompli',1)->where('task_id',$task->id)->where('user_id',Auth::user()->id)->count()}}
                  {{"/".$lists->where('task_id',$task->id)->where('user_id',Auth::user()->id)->count()}}
				  <br></br>

			 
              </a>  @endif

           <br>
         Créé le:  {{$task->created_at}}
           <br>
		   <br>
          <a href="{{URL::to('/SeeSousTask/'.$task->id)}}">Sous-tâches</a></br>
       </p>
                <a type="button" style="border-radius:5px;width:100%;margin-top:-10px; padding-top:10px; padding-bottom:10px;" class="btn btn-primary btn-sm" href="{{URL::to('/NewTask/'.$task->id)}}">Ajouter une nouvelle sous-tâche</a>
<br>
                </div>
    @endforeach
    </div>

    </div>
@endsection <!---->