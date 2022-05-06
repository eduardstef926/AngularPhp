import { HttpClient } from '@angular/common/http';
import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';

@Component({
  selector: 'app-student-page',
  templateUrl: './student-page.component.html',
  styleUrls: ['./student-page.component.css']
})
export class StudentPageComponent implements OnInit {

  username = "";
  data = "";
  currentData = "";
  index = 0;
  currentIndex = 0;

  constructor(private http:HttpClient,private router:Router) { }

  ngOnInit(): void {
  }

  onLogin(user:string){
    this.username = user;
  }

  logOut(){
    this.router.navigate(['/students']);
  }

  printGrades(){
    let url = "http://localhost:8080/code/indexStudent.php";
    this.http.post(url, {
      username: this.username,
      currentIndex: this.currentIndex
    },{responseType:'text'}).subscribe((data) => {
        this.data = data;
    });
  }

  prevButton(){
    this.currentIndex -= 4;
    this.printGrades();
  } 

  nextButton(){
    this.currentIndex += 4;
    this.printGrades();
  }

}
