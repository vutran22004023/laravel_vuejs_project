<template>
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">Calendar</h4>
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Upcube</a></li>
                        <li class="breadcrumb-item active">Calendar</li>
                    </ol>
                </div>

            </div>
        </div>
    </div>
    <!-- end page title -->
    <div class="row mb-4">
        <div class="col-xl-3">
            <div class="card h-100">
                <div class="card-body">
                    <button type="button" class="btn font-16 btn-primary waves-effect waves-light w-100" id="btn-new-event"
                        data-bs-toggle="modal" data-bs-target="#event-modal">
                        Create New Event
                    </button>

                    <div id="external-events">
                        <br>
                        <p class="text-muted">Drag and drop your event or click in the calendar</p>
                        <div class="external-event fc-event bg-success" data-class="bg-success">
                            <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>New Event
                            Planning
                        </div>
                        <div class="external-event fc-event bg-info" data-class="bg-info">
                            <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Meeting
                        </div>
                        <div class="external-event fc-event bg-warning" data-class="bg-warning">
                            <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Generating
                            Reports
                        </div>
                        <div class="external-event fc-event bg-danger" data-class="bg-danger">
                            <i class="mdi mdi-checkbox-blank-circle font-size-11 me-2"></i>Create
                            New theme
                        </div>
                    </div>

                </div>
            </div>
        </div> <!-- end col-->
        <div class="col-xl-9">
            <div class="card mb-0">
                <div class="card-body">
                    <Calendar @dateClick="dateClick" />
                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row-->
    <div style='clear:both'></div>

    <CalendarModal v-if="showModal" :form="newEvent" @closeModal="closeModal" @showModal="showModal" @SaveApp ="SaveApp" />

</template>


<script>
import { useMenu } from '../../../store/use-menu.js';
import Calendar from '../../../components/TheCalendar.vue';
import CalendarModal from '../../../components/Modals/CalendarModal.vue';
import formTime from '../../../Mixins/transformTime.js';



export default {
    
    setup() {
        const store = useMenu();
        store.onSelectedKeys(['admin-roles'])
    },
    components: {
        Calendar,
        CalendarModal
    },
    data() {
        return {
            name: 'TheCalendar',
            showModal: false,
            newEvent: {
                    title: '',
                    category: '',
                    date_at: '',
                    hour: '',
                    user_id: '',
                    session: 1000,
                    
            }
        }
    },
    watch: {
        showModal(newValue) {
            if (newValue) {
                // Thêm class và style vào body khi showModal là true
                document.body.classList.add('modal-open');
                document.body.style.overflow = 'hidden';
                document.body.style.paddingRight = '17px';
            } else {
                // Loại bỏ class và style từ body khi showModal là false
                document.body.classList.remove('modal-open');
                document.body.style.overflow = '';
                document.body.style.paddingRight = '';
            }
        }
    },
    methods: {
        dateClick(arg) {
            this.$data.showModal = true;
            console.log('date click! ', arg)
            this.setModalOpen(arg)
        },
        closeModal() {
            this.$data.showModal = false;
        },
        setModalOpen(arg) {
            const dateAndTime = arg.dateStr.split("T");
            this.newEvent.date_at = dateAndTime[0];
            if (dateAndTime.length > 1) {
                this.newEvent.hour = dateAndTime[1].substr(0, 8); // Lấy 8 ký tự đầu tiên là giờ
            }
            // this.newEvent.user_id = this.$page.user.id =1;
            
        },
        SaveApp(arg) {
            if(arg.title === '') {
                alert('Tiêu mục còn trong vui lòng nhập');
            }

            let dataAppt = this.setDurationSeeion(arg)
            Inertia.post(route('appointment.store', dataAppt,{
                onSuccess: page => {
                    if(Object.entries(page.props.errors).length === 0) {
                        this.closeModal();
                    }
                }
            }))
            Inertia.on("error", event => {
                event.preventDefault();
                console.log('lỗi',error.message);
            })
        },
        setDurationSeeion(form) {
            let dataAppt = form.date_at +"" + form.hour;
            let initSession = new Date;
            const getSecoundsSesion = initSession.getSeconds()+ form.session;
            initSession.setSeconds(getSecoundsSesion)
            return {
                user_id: form.user_id,
                title:form.title,
                start: dataAppt,
                end: formTime(initSession),
                session: form.session,
                category: form.category,
            }
        }

    }

}
</script>