import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { FormControl, FormGroup } from '@angular/forms';
import { Router } from '@angular/router';

@Component({
  selector: 'app-professor-page',
  templateUrl: './professor-page.component.html',
  styleUrls: ['./professor-page.component.css']
})
export class ProfessorPageComponent implements OnInit {

  username = "";
  course = "";
  data = "";
  updateForm: FormGroup;

  constructor(private http:HttpClient,private router:Router) {
    this.updateForm = new FormGroup({'username': new FormControl(),'newgrade': new FormControl()});
  }

  ngOnInit(): void {
  }

  onLogin(user:string){
    this.username = user;
    let url = "http://localhost:8080/code/indexProfessor.php";
    this.http.post(url, {
      username: this.username
    },{responseType:'text'}).subscribe((data) => {
        this.course = data;
    });
  }

  logout(){
    this.router.navigate(['/professors']);
  }

  updateButton(){
     let url = "http://localhost:8080/code/updateGrades.php";
     this.http.post(url, {
      username: this.updateForm.get("username")!.value,
      newgrade: this.updateForm.get("newgrade")!.value
     },{responseType:'text'}).subscribe((data) => {

     });
  }

  printGrades(){
   let url = "http://localhost:8080/code/professorGrades.php";
   this.http.post(url, {
    username: this.username
   },{responseType: 'text'}).subscribe((data) => {
      this.data = data;
   });
  }

}
