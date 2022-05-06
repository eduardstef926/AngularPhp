import { Component } from '@angular/core';
import { HttpClient, HttpHeaders, HttpRequest } from '@angular/common/http';
import { FormControl,FormGroup } from '@angular/forms';
import {Router} from '@angular/router';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
    
  name:String | undefined;
  registerForm: FormGroup;

  constructor(private http:HttpClient,private router:Router){
    this.registerForm = new FormGroup({'username':new FormControl(),'password':new FormControl()});
  }

  register(){
    // let headerOptions = new HttpHeaders().set('Content-Type', 'application/x-www-form-urlencoded');
    // let url = "http://localhost/code.php";
    // this.http.post(url, {
    //   username:this.registerForm.get("username")!.value,
    //   password:this.registerForm.get("password")!.value
    // },{responseType: 'text'}).subscribe((data) => {
    //   console.log(data);
    // });
    this.router.navigateByUrl('AngularProject\src\app\login-student\login-student.component.html');
  }

}
