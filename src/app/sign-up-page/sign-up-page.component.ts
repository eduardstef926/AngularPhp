import { HttpClient } from '@angular/common/http';
import { Component, OnInit,EventEmitter, Output } from '@angular/core';
import { FormControl, FormGroup } from '@angular/forms';
import { Router } from '@angular/router';

@Component({
  selector: 'app-sign-up-page',
  templateUrl: './sign-up-page.component.html',
  styleUrls: ['./sign-up-page.component.css']
})
export class SignUpPageComponent implements OnInit {

  name:String | undefined;
  registerForm: FormGroup;
  professorForm: FormGroup;
  @Output() username = new EventEmitter<string>();

  constructor(private http:HttpClient,private router:Router){
    this.registerForm = new FormGroup({'username':new FormControl(),'password':new FormControl()});
    this.professorForm = new FormGroup({'username':new FormControl(),'password': new FormControl()});
  }

  ngOnInit(): void {
  }

  registerProfessor(){
    let url = "http://localhost:8080/code/signupProfessor.php";
    console.log(this.professorForm.get("username")!.value);
    this.http.post(url, {
      username: this.professorForm.get("username")!.value,
      password: this.professorForm.get("password")!.value
    },{responseType:'text'}).subscribe((data) => {
      console.log(data);
    });
  }

  register(){
    let url = "http://localhost:8080/code/signupStudent.php";
    this.http.post(url, {
      username: this.registerForm.get("username")!.value,
      password: this.registerForm.get("password")!.value
    },{responseType:'text'}).subscribe((data) => {
      let response = "wrong2";
      if(data != response){
        //this.username.emit(this.registerForm.get("username")!.value);
       // this.router.navigate(['/students']);
       console.log(data);
      }
    });
  }

}
