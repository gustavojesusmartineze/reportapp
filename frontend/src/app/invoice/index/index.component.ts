import { Component, OnInit } from '@angular/core';

import { InvoiceService } from '../invoice.service';
import { Invoice } from '../invoice';


@Component({
  selector: 'app-index',
  templateUrl: './index.component.html',
  styleUrls: ['./index.component.scss']
})
export class IndexComponent implements OnInit {

  invoices: Invoice[] = [];

  constructor(public invoiceService: InvoiceService) { }

  ngOnInit(): void {
    this.invoiceService.getAll().subscribe((data: Invoice[])=>{
      this.invoices = data;
      console.log(this.invoices);
    });
  }
}
