     <!-- Sidebar Menu -->
     <nav class="mt-2" style="height: auto">
       <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         <li class="nav-item menu-open">

           <a href="/home" class="nav-link @if (Route::current()->getName()== 'users.manage') active @endif">
             Manage Clients
           </a>
           <a href="{{route('receptionist.approvedClients')}}" class="nav-link @if (Route::current()->getName()== 'receptionist.approvedClients') active @endif">
             <p>
               My Clients
             </p>
           </a>
           <a href="{{route('reservation.myClients')}}" class="nav-link @if (Route::current()->getName()== 'reservation.list') active @endif">
             <p>
               Clients Reservations
             </p>
           </a>


         </li>
       </ul>
     </nav>
     <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->

     </aside>