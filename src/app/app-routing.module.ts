import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import {HttpClientModule} from '@angular/common/http';
import { LoginStudentComponent } from './login-student/login-student.component';
import { LoginProfessorComponent } from './login-professor/login-professor.component';
import { SignUpPageComponent } from './sign-up-page/sign-up-page.component';
import { StudentPageComponent } from './student-page/student-page.component';
import { ProfessorPageComponent } from './professor-page/professor-page.component';

const routes: Routes = [
  {path: 'students', component: LoginStudentComponent},
  {path: 'professors', component: LoginProfessorComponent},
  {path: 'signup', component: SignUpPageComponent},
  {path: 'studentPage', component: StudentPageComponent},
  {path: 'professorPage', component: ProfessorPageComponent}
];

@NgModule({
  imports: [RouterModule.forRoot(routes),HttpClientModule],
  exports: [RouterModule]
})
export class AppRoutingModule {}

export const routingComponents = [LoginStudentComponent,LoginProfessorComponent];

