<template>
    <div class="row section-6">
        <div class="col-sm-6 brown">
            <h1>Виникли питання?</h1>
            <p class="first-p last-p mb-md-0">
                Залиште свій номер телефону, ми обов'язково зателефонуємо.
            </p></div>
        <div class="col-sm-6">
            <dynamic-form
                    ref="dynamic-form"
                    v-model="data"
                    :lang="lang"
                    :descriptors="descriptors">
                <template slot="operations">
                    <el-button type="primary" class="button gold" @click="validate" plain>Відправити
                        <svg width="36px" height="24px" viewBox="0 0 16 16" class="bi bi-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M10.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.793 8l-2.647-2.646a.5.5 0 0 1 0-.708z"/>
                        <path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5H13a.5.5 0 0 1 0 1H2.5A.5.5 0 0 1 2 8z"/>
                    </svg></el-button>
                </template>
            </dynamic-form>
        </div>
    </div>
</template>

<script>
  export default {
    props: ['lang'],
    data () {
      return {
        descriptors: {
          name: [
            { type: 'string', placeholder: 'Ваше Ім\'я', message: 'Допускаються лише літери' },
            { required: true, message: 'Це поле обов\'язкове' }
          ],
          email: [
            { type: 'email', placeholder: 'Email', message: 'Перевірте ваш e-mail' },
            { required: true, message: 'Це поле обов\'язкове' }
          ],
          number: [
            { type: 'string', pattern: /^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/g, placeholder: 'Ваш телефон', message: 'Перевірте ваш номер' },
            { required: true, message: 'Це поле обов\'язкове' }
          ]
        },
        data: {}
      }
    },
  methods: {
    clearValidate() {
      this.$refs['dynamic-form'].clearValidate()
    },
    resetFields() {
      this.$refs['dynamic-form'].resetFields()
    },
    validate() {
      this.$refs['dynamic-form'].validate((result) => {
        if (result) {
          this.$refs['dynamic-form'].resetFields();

        }
      })
    }
  }
  }
</script>

<style lang="scss">
    @import "../assets/SCSS/variable";
    .section-6 {
        padding: 9.6vw 18.6vw 3vw 18.6vw;
        background-color: #F2F2F2;
        background-image: url("../assets/white_bg.png"), url("../assets/baran_bg.png");
        background-repeat: no-repeat;
        background-position: left top, right bottom;
        background-size: 16%, contain;

        &:nth-child(2n+1) {
            margin-top: -10px;
            background-image: url("../assets/white_bg.png"), url("../assets/flower_bg.png");
            background-position: left top, 98% bottom;
        }

        .row:first-child .col-md-6:first-child {
            padding-right: 4vw;
        }
        .mb-md-0{
            margin-top:38px;
        }

        form.el-form {
            .el-form-item {
                width: 40%;
                float: left;
            }
            .el-form-item__content{
                margin-left: 0px !important;
            }
            button.el-button{
                outline: none;
                background-color: transparent;
                border: none;
                font-size: 20px;
                padding: 0px !important;
                display: flex;
                flex-direction: column;
                justify-content: flex-end;
                height: 2.5vw;
                max-height: 50px;
                margin-bottom: 35px;

                &:hover{
                    color: $color_nav;
                }
            }
            .el-form-item__error{
                top: 65%;
            }
            .dynamic-input.el-input.el-input--small {
                display: flex;
                flex-direction: column;
                justify-content: flex-end;
                height: 2.5vw;
                max-height: 50px;
                margin-bottom: 35px;
            }
            .el-form-item .dynamic-input.el-input:before{
                content: "";
                position: absolute;
                left: 0px;
                bottom: 12px;
                width: 16px;
                height: 16px;
                background-size: contain !important;
            }

            .el-form-item:first-child .dynamic-input.el-input:before{
                background: url("../assets/man.png") no-repeat;

            }

            .el-form-item:nth-child(2) .dynamic-input.el-input:before{
                 background: url("../assets/mail.png") no-repeat;

             }

            .el-form-item:nth-child(3) .dynamic-input.el-input:before{
                  background: url("../assets/phone.png") no-repeat;

              }

            .el-form-item--small .el-form-item__content{
                margin-left:0px !important;
            }
            label {
                display: none;
            }
            .el-input__inner{
                border: none;
                border-bottom:1px solid #707070;
                outline: none!important;
                width:183px;
                padding-bottom: 10px;
                border-radius: 0px;
                font-size: 16px;
                font-weight: 600;
                font-family: $font_size_base;
                color: $color_nav;
                padding-left: 30px;
                background-color: transparent;

                input{
                    height: 40px;
                }

                &::placeholder{
                    font-size: 16px;
                    font-weight: 600;
                    font-family: $font_family-base;
                    color: $color_nav;
                    line-height: 21px;
                }
            }
        }
    }
    @media screen and (max-width: 1199px) {
        .section-6 {
            padding: 15vw 10vw 30vw !important;
            background-size: 60%;

            .el-form-item.operations{
                margin-bottom: 18px;
            }
        }
        .section-6 form.el-form .el-form-item, .section-6 form.el-form .dynamic-input.el-input.el-input--small,
        .section-6 form.el-form .el-input__inner{
            width: 100%;
        }
    }
</style>