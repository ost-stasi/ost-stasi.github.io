<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class AuthorizationController extends Controller{
    public function show(Request $request){
        if ($request->has('login') && $request->has('password')) {
            $process = new Process(['python', 'C:\Users\Пк\Desktop\Laravel_py']);
            $process->run();
            // executes after the command finishes
            if (!$process->isSuccessful()) {
                throw new ProcessFailedException($process);
            }
            echo $process->getOutput();
        }
        return view('start');
    }
}
?>