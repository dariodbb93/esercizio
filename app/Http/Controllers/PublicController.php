<?php

namespace App\Http\Controllers;


use App\Models\dev;
use App\Models\Task;
use App\Models\Team;
use App\Models\Admin;
use App\Models\Projects;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class PublicController extends Controller


{

public function welcome(){


    return view ('home');
}




    public function home()
    {
        return view('home');
    }

    public function storeTeam(Request $request)   //creazione del colore del team
    {
        $team = Team::create([
            'teamMember' => $request->input('teamMember')
        ]);

        return redirect(route('welcome'));
    }


    public function showAdmins()
    {

        $teams = Team::all();
        return view('team', compact('teams'));
    }

    public function storeAdmin(Request $request)    // creazione del CEO
    {
        $admin = Admin::create([
            'name' => $request->input('name'),
            'surname' => $request->input('surname'),
            'team_id' => $request->input('team_id')

        ]);

        return redirect(route('welcome'));
    }



    public function showTeam()
    {

        $admins = Admin::all();
        $teams = Team::all();
        return view('dev', compact('teams'), compact('admins'));
    }






    public function storeDev(Request $request)
    {

        $team = dev::create([
            'nameDev' => $request->input('nameDev'),
            'surnameDev' => $request->input('surnameDev'),
            'team_id' => $request->input('colore'),
            'admin_id' => $request->input('admin_id')

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
       
       
       $admins = Admin::all();
        $teams = Team::all();
        return view('projects', compact('teams'), compact('admins'));
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


    public function editP(Projects $project)
    {




        return view('editP', compact('project'));
    }




    public function updateProject(Projects $project, Request $request)
    {

        $project->update([

            'nameProject' => $request->name

        ]);



        return view('welcome');
    }



    public function destroyP(Projects $project)
    {
        $project->delete();

        return redirect(route('welcome'));
    }


    public function task()
    {



        $projects = Projects::all();
        $admins = Admin::all();
        return view('task', compact('projects'), compact('admins'));
    }


    public function storeTask(Request $request)
    {

        $team = Task::create([
            'taskTitle' => $request->input('taskTitle'),
            'taskDescription' => $request->input('taskDescription'),
            // 'nameProject' => $request->input('nameProject'),
            'status' => $request->input('status'),
            // 'admin' => $request->input('admin')
            'project_id' => $request->input('nameProject')



        ]);

        return redirect(route('welcome'));
    }


    public function showTask()
    {

        $tasks = Task::all();

        return view('showTask', compact('tasks'));
    }


    public function indexProject(){

        $projects = Projects::all();



        return view('indexProject', compact('projects'));





    }



}
