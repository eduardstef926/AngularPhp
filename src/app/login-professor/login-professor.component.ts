import { HttpClient } from '@angular/common/http';
import { Component, OnInit, Output, EventEmitter } from '@angular/core';
import { FormControl, FormGroup } from '@angular/forms';
import { Router } from '@angular/router';

@Component({
  selector: 'app-login-professor',
  templateUrl: './login-professor.component.html',
  styleUrls: ['./login-professor.component.css']
})
export class LoginProfessorComponent implements OnInit {
  name:String| undefined;
  loginForm: FormGroup;
  @Output() username = new EventEmitter<string>();

  constructor(private http:HttpClient,private router:Router) {
    this.loginForm = new FormGroup({'username': new FormControl(),'password': new FormControl()})
  }

  ngOnInit(): void {
  }

  login(){
    let url = "http://localhost:8080/code/loginProfessor.php";
    this.http.post(url, {
      username: this.loginForm.get("username")!.value,
      password: this.loginForm.get("password")!.value
    },{responseType: 'text'}).subscribe((data) => {
       let response = "wrong";
       if(data != response){
         this.username.emit(this.loginForm.get("username")!.value);
         this.router.navigate(['/professorPage']);
       }
    });
  }

  redirect(){
    this.router.navigate(['/signup']);
  }
} 
