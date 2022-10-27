import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { IndexComponent } from './index/index.component';
import { ShowComponent } from './show/show.component';

const routes: Routes = [
  { path: 'invoice', redirectTo: 'invoice/index', pathMatch: 'full'},
  { path: 'invoice/index', component: IndexComponent },
  { path: 'invoice/:id/show', component: ShowComponent }
]

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class InvoiceRoutingModule { }
