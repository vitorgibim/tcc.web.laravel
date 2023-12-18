<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Support\Str;
use Laravel\Sanctum\NewAccessToken;

class AuthController extends Controller
{

  public function login(Request $request) {

    // Validar credenciais
    $this->validate($request, [
      'ra' => 'required', 
      'cpf' => 'required'
    ]);

    $student = Student::where('ra', $request->ra)
                      ->where('cpf', $request->cpf)
                      ->first();

    if(!$student) {
      return response()->json(['error' => 'Invalid credentials'], 401);
    }

    // Gerar token
    // $token = $this->generateToken($student);
    $token = "123456";

    return response()->json([
      'message' => 'Login successful',
      'token' => $token,
      'cpf' => $request->cpf,
      'ra' => $request->ra
    ]);

  }

  private function generateToken($student) {

    $token = bin2hex(random_bytes(32));

    $accessToken = new NewAccessToken;
    $accessToken->id = Str::uuid()->toString();
    $accessToken->token = $token;
    $accessToken->user_id = $student->id;
    $accessToken->save();

    return $token;

  }
}