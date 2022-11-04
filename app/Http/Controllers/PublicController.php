<?php

namespace App\Http\Controllers;


use App\Models\dev;
use App\Models\Team;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class PublicController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function storeAdmin(Request $request)
    {
        $admin = Admin::create([
            'name' => $request->input('name'),
            'surname' => $request->input('surname')
        ]);

        return redirect(route('welcome'));
    }

    public function showAdmins()
    {

        $admins = Admin::all();
        return view('team', compact('admins'));
    }



    public function showTeam()
    {

        $teams = Team::all();
        return view('dev', compact('teams'));
    }




    public function storeTeam(Request $request)
    {



        // $admin = Admin::find( $request->input('ceo'));

        $team = Team::create([
            'teamMember' => $request->input('teamMember'),
            'admin_id' =>  $request->input('ceo'),



        ]);

        return redirect(route('welcome'));
    }



    public function storeDev(Request $request)
    {

        $team = dev::create([
            'nameDev' => $request->input('nameDev'),
            'surnameDev' => $request->input('surnameDev'),
            'team_id' => $request->input('colore'),


        ]);


        return redirect(route('welcome'));
    }


    public function indexDev()
    {

        $devs = dev::all();





        return view('indexDev', compact('devs'));
    }



    public function edit(dev $dev)
    {

        return view('.edit', compact('dev'));
    }



    public function update(dev $dev, Request $request)
    {

        $dev->update([

            'nameDev' => $request->nameDev,
            'surnameDev' => $request->surnameDev


        ]);


        $devs = dev::all();


        return view('indexDev', compact('devs'));
    }


    public function destroy(dev $dev)
    {
        $dev->delete();

        return redirect(route('indexDev'));
    }



    public function projects()
    {
        $teams = Team::all();
        return view('projects', compact('teams'));
    }



    public function storeProjects(Request $request)
    {

        $projects = Projects::create([
            'nameProject' => $request->input('nameProject'),
            'aboutProject' => $request->input('aboutProject'),
            'dateExipiration' => $request->input('dateExipiration'),
            'team_id' => $request->input('colore')


        ]);


        return redirect(route('welcome'));
    }

    public function showProjects()
    {

        $projects = Projects::all();

        return view('showProjects', compact('projects'));
    }


public function editP(Projects $project){




    return view ('editP', compact('project'));



}




    public function updateProject(Projects $project, Request $request)
    {

        $project->update([

            'nameProject' => $request->name

        ]);
  


        return view ('welcome');

      
    }



    public function destroyP(Projects $project)
    {
        $project->delete();
    
        return redirect(route('welcome'));
    }
    







}












// public function update(dev $dev, Request $request)
// {

//     $dev->update([

//         'nameDev' => $request->nameDev,
//         'surnameDev' => $request->surnameDev


//     ]);


//     $devs = dev::all();


//     return view('indexDev', compact('devs'));
// }