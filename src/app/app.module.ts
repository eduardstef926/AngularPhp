import { HttpClientModule } from '@angular/common/http';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule, routingComponents } from './app-routing.module';
import { AppComponent } from './app.component';
import { LoginStudentComponent } from './login-student/login-student.component';
import { LoginProfessorComponent } from './login-professor/login-professor.component';
import { StudentPageComponent } from './student-page/student-page.component';
import { ProfessorPageComponent } from './professor-page/professor-page.component';
import { ReactiveFormsModule } from '@angular/forms';
import { Router } from '@angular/router';
import { SignUpPageComponent } from './sign-up-page/sign-up-page.component';

@NgModule({
  declarations: [
    AppComponent,
    LoginStudentComponent,
    LoginProfessorComponent,
    routingComponents,
    SignUpPageComponent,
    StudentPageComponent,
    LoginStudentComponent,
    ProfessorPageComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule,
    HttpClientModule,
    ReactiveFormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
