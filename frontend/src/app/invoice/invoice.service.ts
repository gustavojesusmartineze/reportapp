import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';

import {  Observable, throwError } from 'rxjs';
import { catchError } from 'rxjs/operators';

import { Invoice } from './invoice';

@Injectable({
  providedIn: 'root'
})
export class InvoiceService {

  private apiURL = "http://localhost:8000/api/invoices/";

  httpOptions = {
    headers: new HttpHeaders({
      'Content-Type': 'application/json'
    })
  }

  constructor(private httpClient: HttpClient) { }

  getAll(): Observable<Invoice[]> {
    return this.httpClient.get<Invoice[]>(this.apiURL)
    .pipe(
      catchError(this.errorHandler)
    )
  }

  find(id: number): Observable<Invoice> {
    return this.httpClient.get<Invoice>(this.apiURL + id)
    .pipe(
      catchError(this.errorHandler)
    )
  }

  errorHandler(error: any) {
    let errorMessage = '';
    if(error.error instanceof ErrorEvent) {
      errorMessage = error.error.message;
    } else {
      errorMessage = `Error Code: ${error.status}\nMessage: ${error.message}`;
    }
    return throwError(errorMessage);
  }
}
