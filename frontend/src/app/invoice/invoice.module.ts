import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { InvoiceRoutingModule } from './invoice-routing.module';
import { IndexComponent } from './index/index.component';
import { ShowComponent } from './show/show.component';


@NgModule({
  declarations: [IndexComponent, ShowComponent],
  imports: [
    CommonModule,
    InvoiceRoutingModule
  ]
})
export class InvoiceModule { }
