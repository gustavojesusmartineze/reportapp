import { Component, OnInit } from '@angular/core';
import { InvoiceService } from '../invoice.service';
import { ActivatedRoute, Router } from '@angular/router';
import { Invoice } from '../invoice';

@Component({
  selector: 'app-show',
  templateUrl: './show.component.html',
  styleUrls: ['./show.component.scss']
})
export class ShowComponent implements OnInit {

  invoice!: Invoice;

  constructor(
    public invoiceService: InvoiceService,
    private route: ActivatedRoute,
    private router: Router
  ) {
  }

  ngOnInit(): void {
    const id = this.route.snapshot.params['id'];

    this.invoiceService.find(id).subscribe((data: Invoice)=>{
      this.invoice = data;
      console.log(data);
    });
  }

}
