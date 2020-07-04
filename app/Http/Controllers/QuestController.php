<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestModel;

class QuestController extends Controller
{
    public function index() {
        $quests = QuestModel::get_all();
        return view('forum.index',compact('quests'));
    }

    public function create() {
        return view('forum.create');
    }

    public function store(Request $request) {
        $data = new \App\Models\QuestModel;
        
        $data->quest_title = $request->get('quest_title');
        $data->quest_content = $request->get('quest_content');

        $data->save($data);
        if($data){
            return redirect('/pertanyaan');
        }
    }

    public function show($id) {
        $quest = QuestModel::find($id);
        return view('forum.quest',compact('quest'));
    }

    public function edit($id) {
        $quest = QuestModel::find($id);
        return view('forum.q_edit',compact('quest'));
    }

    public function update($id, Request $request) {
        $quest = QuestModel::update($id, $request->all());
        return redirect('/pertanyaan');
    }

    public function drop($id) {
        $quest = QuestModel::destroy($id);
        return redirect('/pertanyaan');
    }
}
