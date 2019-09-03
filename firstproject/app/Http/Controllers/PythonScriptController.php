<?php

namespace App\Http\Controllers;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

Class PythonScriptController extends Controller{
    public function ParseTitle(){
        $process = new Process('python pythonscripts/practice.py');
        $process->run();
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }
        print($process->getOutput());
        $outcome = $process->getOutput();
        return view('ParseData');
    }
}