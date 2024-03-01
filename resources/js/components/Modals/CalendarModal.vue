<template>
    <div class="modal fade" :class="{ 'show': showModal }" :style="{ display: showModal ? 'block' : 'none' }" id="event-modal" tabindex="-1" :role="showModal ? 'dialog' : null" aria-labelledby="modal-title" :aria-hidden="!showModal" :aria-modal="showModal"
                            >
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header py-3 px-4">
                                        <h5 class="modal-title" id="modal-title">Event</h5>
                                        <button type="button" @click="closeModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
            
                                    <div class="modal-body p-4">
                                        <form class="needs-validation"  id="form-event" novalidate>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Event Name</label>
                                                        <input class="form-control" placeholder="Insert Event Name" type="text"
                                                             id="event-title" required value=""
                                                            v-model="form.title"
                                                            >
                                                        <div class="invalid-feedback">Please provide a valid event name
                                                        </div>
                                                    </div>
                                                    
                                                </div> <!-- end col-->
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="example-date-input" class="col-sm-2 col-form-label">Date</label>
                                                        <div class="col-sm-10">
                                                            <input class="form-control" type="date"  id="example-date-input" v-model="form.date_at">
                                                        </div>
                                                        <div class="invalid-feedback">Please provide a valid event name
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label for="example-time-input" class="col-sm-2 col-form-label">Time</label>
                                                    <div class="col-sm-10">
                                                        <input class="form-control" type="time"  id="example-time-input" v-model="form.hour">
                                                </div>
                                                        <div class="invalid-feedback">Please provide a valid event name
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="mb-3">
                                                        <label class="form-label">Category</label>
                                                        <select class="form-select"  id="event-category"
                                                        v-model="form.category"
                                                        >
                                                            <option  selected> --Select-- </option>
                                                            <option value="bg-danger">Danger</option>
                                                            <option value="bg-success">Success</option>
                                                            <option value="bg-primary">Primary</option>
                                                            <option value="bg-info">Info</option>
                                                            <option value="bg-dark">Dark</option>
                                                            <option value="bg-warning">Warning</option>
                                                        </select>
                                                        <div class="invalid-feedback">Please select a valid event
                                                            category</div>
                                                    </div>
                                                </div> <!-- end col-->
                                            </div> <!-- end row-->
                                            <div class="row mt-2">
                                                <div class="col-6">
                                                    <button type="button" class="btn btn-danger" 
                                                        id="btn-delete-event" >Delete</button>
                                                </div> <!-- end col-->
                                                <div class="col-6 text-end">
                                                    <button type="button" class="btn btn-light me-1"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-success" id="btn-save-event" @click.prevent="store(form)">Save</button>
                                                </div> <!-- end col-->
                                            </div> <!-- end row-->
                                        </form>
                                    </div>
                                </div>
                                <!-- end modal-content-->
                            </div>
                            <!-- end modal dialog-->
                        </div>
                        <!-- end modal-->
                        
</template>

<script>
    export default {
        name:'Modal',
        props: {
            form: {
                type: Object,
                default: ()=> {

                }
            }
        },
        methods: {
            closeModal() {
                this.$emit('closeModal');
            },

            showModal() {
                this.$emit('showModal');
            },
            store(form) {
                this.$emit('SaveApp',form );
            }
        }
        
    }
</script>