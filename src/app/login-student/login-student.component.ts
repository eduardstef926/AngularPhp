import { HttpClient } from '@angular/common/http';
import { Component, OnInit, Output,EventEmitter } from '@angular/core';
import { FormControl, FormGroup } from '@angular/forms';
import { Router } from '@angular/router';

@Component({
  selector: 'app-login-student',
  templateUrl: './login-student.component.html',
  styleUrls: ['./login-student.component.css']
})
export class LoginStudentComponent implements OnInit {

  name:String | undefined;
  loginForm: FormGroup;
  response: String | undefined;
  @Output() username = new EventEmitter<string>();

  constructor(private http:HttpClient,private router:Router) {
    this.loginForm = new FormGroup({'username':new FormControl(),'password':new FormControl()});
  }

  ngOnInit(): void {
  }

  login(){
    let url = "http://localhost:8080/code/loginStudent.php";
    this.http.post(url, {
        username: this.loginForm.get("username")!.value,
        password: this.loginForm.get("password")!.value
    },{responseType:'text'}).subscribe((data) => {
        let response = "wrong1";
        if(data != response){
           this.username.emit(this.loginForm.get("username")!.value);
           this.router.navigate(['/studentPage']);
        }
    });
  }
  redirect(){
    this.router.navigate(['/signup']);
  }

}
